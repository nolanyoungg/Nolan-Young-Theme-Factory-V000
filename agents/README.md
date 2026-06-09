# Agent Role Files

These files define roles used by the local generation stages. They are instruction modules loaded by `scripts/run-ollama-stage.sh`; they are not automatically separate paid Codex runs.

Role files define focus and responsibility. Technical contracts still live in `contracts/` and must be followed exactly.

Typical stage loading:
- Planner stage: orchestrator and planner.
- Builder stage: orchestrator, architect, WordPress builder, design director, and content writer.
- Preview stage: orchestrator and static preview builder.
- Review-fix stage: security reviewer, quality reviewer, fixer, and release manager.
