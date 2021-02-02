Please use [Git Flow](https://jeffkreeftmeijer.com/git-flow/)

- Make most changes on `develop`: **this is the source of truth**, so all changes should get merged into it at some point
- If you're making a chunk of related changes you can use a `feature` branch (these will get merged into `develop` when you're done)
- If you need to make quick changes (e.g. whilst teaching the week) then use a `hotfix` (these should merge into `develop` and `main`)
- Use a `release` to merge into `main` when the material is ready for students

Generally works out as a `release` per cohort – a week or so before teaching – and maybe a few `hotfix`es whilst teaching.

If doing a `release` for a specific cohort, then please also add a separate `git tag #<cohort-number>` (e.g. `git tag #17`)

# Versioning

Trying to use a SemVer-ish system for numbering, but it doesn't map so well on to written material:

- patch for little changes/`hotfix`es
- minor for incremental stuff
- major for significant rewrites

---

I'd suggest installing the [git-flow CLI commands](https://github.com/nvie/gitflow) and adding the following aliases to your CLI setup:

```bash
alias feature="git flow feature"
alias release="git flow release"
alias hotfix="git flow hotfix"
```
