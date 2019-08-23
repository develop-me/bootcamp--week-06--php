templates := $(shell find ../../templates -type f -name "*.tex" -depth 1)
tex := $(shell find . -type f -name "*.tex")
source := $(shell find . -type f -name "*.php")

notes.pdf: $(templates) $(tex) $(source)
	/Library/TeX/texbin/xelatex --halt-on-error --shell-escape notes.tex
	open -g notes.pdf
	terminal-notifier -message "Rendered" -title "XeLaTeX" -activate com.googlecode.iterm2
