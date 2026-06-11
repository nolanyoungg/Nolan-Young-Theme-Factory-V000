#!/usr/bin/env bash

# Central Codex defaults for the factory.
# Override these in the environment to switch the repo-wide default model or
# to tune specific call sites without editing the workflow scripts.

theme_factory_codex_default_model() {
  printf '%s\n' "${CODEX_MODEL_DEFAULT:-gpt-5.4-mini}"
}

theme_factory_codex_default_reasoning() {
  printf '%s\n' "${CODEX_REASONING_DEFAULT:-low}"
}

theme_factory_codex_model_for_context() {
  local context="${1:-generation}"
  case "$context" in
    final-pass)
      printf '%s\n' "${CODEX_MODEL_FINAL:-${CODEX_MODEL_DEFAULT:-gpt-5.4-mini}}"
      ;;
    review)
      printf '%s\n' "${CODEX_MODEL_REVIEW:-${CODEX_MODEL_DEFAULT:-gpt-5.4-mini}}"
      ;;
    fixer)
      printf '%s\n' "${CODEX_MODEL_FIXER:-${CODEX_MODEL_DEFAULT:-gpt-5.4-mini}}"
      ;;
    generation|factory|*)
      printf '%s\n' "${CODEX_MODEL_GENERATION:-${CODEX_MODEL_DEFAULT:-gpt-5.4-mini}}"
      ;;
  esac
}

theme_factory_codex_reasoning_for_context() {
  local context="${1:-generation}"
  case "$context" in
    final-pass)
      printf '%s\n' "${CODEX_REASONING_FINAL:-${CODEX_REASONING_DEFAULT:-low}}"
      ;;
    review)
      printf '%s\n' "${CODEX_REASONING_REVIEW:-${CODEX_REASONING_DEFAULT:-low}}"
      ;;
    fixer)
      printf '%s\n' "${CODEX_REASONING_FIXER:-${CODEX_REASONING_DEFAULT:-low}}"
      ;;
    generation|factory|*)
      printf '%s\n' "${CODEX_REASONING_GENERATION:-${CODEX_REASONING_DEFAULT:-low}}"
      ;;
  esac
}

theme_factory_codex_command_for_context() {
  local context="${1:-generation}"
  local model reasoning

  model="$(theme_factory_codex_model_for_context "$context")"
  reasoning="$(theme_factory_codex_reasoning_for_context "$context")"
  printf 'codex exec --model %s -c model_reasoning_effort="%s"\n' "$model" "$reasoning"
}
