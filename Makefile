SASS?=sass
HUGO?=hugo
HUGOOPTS=

BASEDIR=$(CURDIR)
INPUTDIR=$(BASEDIR)/content
STATICDIR=$(BASEDIR)/static
OUTPUTDIR=$(BASEDIR)/public
SASSDIR=$(BASEDIR)/sass

LOCALURL=http://localhost/~morris/hugo/public/

FTP_HOST=localhost
FTP_USER=anonymous
FTP_TARGET_DIR=/

DEBUG ?= 0
ifeq ($(DEBUG), 1)
	HUGOOPTS += -D
endif

RELATIVE ?= 0
ifeq ($(RELATIVE), 1)
	HUGOOPTS += --relative-urls
endif

help:
	@echo 'Makefile for a hugo Web site                                           '
	@echo '                                                                          '
	@echo 'Usage:                                                                    '
	@echo '   make css                            (re)generate the stylesheets       '
	@echo '   make html                           (re)generate the web site          '
	@echo '   make local_html                     (re)gen the web site for local dev '
	@echo '   make clean                          remove the generated files         '
	@echo '   make regenerate                     regenerate files upon modification '
	@echo '   make publish                        generate using production settings '
	@echo '   make local_publish                  generate using local settings '
	@echo '   make ftp_upload                     upload the web site via FTP        '
	@echo '                                                                          '
	@echo 'Set the DEBUG variable to 1 to enable debugging, e.g. make DEBUG=1 html   '
	@echo 'Set the RELATIVE variable to 1 to enable relative urls                    '
	@echo '                                                                          '


css:
	$(SASS) $(SASSDIR)/main.sass $(STATICDIR)/main.css

html:
	$(HUGO)

local_html:
	$(HUGO) -b $(LOCALURL)

clean:
	[ ! -d $(OUTPUTDIR) ] || rm -rf $(OUTPUTDIR)

regenerate:
	$(HUGO) -r $(INPUTDIR) -o $(OUTPUTDIR) -s $(CONFFILE) $(HUGOOPTS)

publish: css html
local_publish: css local_html

ftp_upload: publish
	lftp ftp://$(FTP_USER)@$(FTP_HOST) -e "mirror -R $(OUTPUTDIR) $(FTP_TARGET_DIR) ; quit"

.PHONY: html help clean regenerate serve serve-global devserver stopserver publish ftp_upload
