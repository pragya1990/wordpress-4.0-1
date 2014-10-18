#!/bin/sh
LDFLAGS="-L/Applications/wordpress-4.0-1/common/lib $LDFLAGS"
export LDFLAGS
CFLAGS="-I/Applications/wordpress-4.0-1/common/include $CFLAGS"
export CFLAGS
		    
PKG_CONFIG_PATH="/Applications/wordpress-4.0-1/common/lib/pkgconfig"
export PKG_CONFIG_PATH
