# 006 Codex-Only Generation Observations

## Run Summary

The successful 006 run generated `006_nolan_young_theme_lumora_harbor_hotel` with Codex-only mode using:

`codex exec --model gpt-5.4-mini -c model_reasoning_effort="medium"`

The run completed after being given a longer uninterrupted generation window. Codex reported approximately 237k tokens used.

## What Worked

- The filled template prompt produced a distinct hospitality concept with stronger visual direction than the previous technical-service prompts.
- The workflow-owned gallery update preserved existing generated theme cards and added 006.
- Disabling raw transcript streaming kept the operator console usable while preserving `codex-final-raw.md` in the run report.
- The theme build, ZIP packaging, and slug-level validation completed successfully after Codex exited.
- The output includes business-specific SVG assets for hotel rooms, dining, events, wellness, concierge planning, and harbor guides.
- The raw Codex transcript reached roughly 13 MB and was not committed; concise run notes and metadata are enough for the repository history.

## Process Notes

- The successful run needed patience. The early phase spent several minutes reading contracts and preparing files before the theme tree became substantial.
- Stopping too early can waste more usage than letting the model finish, especially on full WordPress theme generation.
- The most useful progress check was disk growth in the theme and preview directories, not raw console chatter.
- Codex still produced a large raw transcript and briefly hit a temporary Node writer syntax error, but it recovered without manual theme edits.

## Repo Improvement Notes

- Keep `CODEX_STREAM_RAW=0` as the default so generation logs do not flood the terminal.
- Keep the scaffold-before-Codex behavior because it makes paths predictable and gives the workflow a visible progress marker.
- Avoid adding more process complexity unless validation or repeated completed runs prove it is necessary.
- Future generation runs should allow a longer first-pass window before interruption.
