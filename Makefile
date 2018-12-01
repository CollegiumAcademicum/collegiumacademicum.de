BASEDIR=$(CURDIR)
LOCAL_DIR=$(BASEDIR)/public
UPLOAD_DIR=$(BASEDIR)/upload

LOCALURL=http://localhost/

help:
	@echo 'Makefile for a hugo Web site                                           '
	@echo '                                                                          '
	@echo 'Usage:                                                                    '
	@echo '   make publish                        generate in production and upload  '
	@echo '   make local                  		  generate for local dev settings    '
	@echo '                                                                          '

local:
	[ ! -d $(LOCAL_DIR) ] || rm -rf $(LOCAL_DIR)
	mkdir $(LOCAL_DIR)
	hugo -D --i18n-warnings -b $(LOCALURL) -d $(LOCAL_DIR)

publish: css
	[ ! -d $(UPLOAD_DIR) ] || rm -rf $(UPLOAD_DIR)
	mkdir $(UPLOAD_DIR)
	hugo -d $(UPLOAD_DIR)
	find $(UPLOAD_DIR) -type f -name "*.html" -exec node_modules/.bin/html-beautify -r {} \;

.PHONY: help local publish
