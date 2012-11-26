Nicks-Base-Theme
===========

A LESS driven child theme template for PageLines. This is what I use to start each new theme with, and is currently how I reccommend to build Child Themes for PageLines. PageLines has its own PHP LESS compiler which compiles the LESS into CSS on the fly. This means all you need to worry about when theming is pecking out some LESS.

If you're working locally (which you should be), you can turn off the caching by adding `define('PL_LESS_DEV',true);` to your wp-config file. This prevents you from having to Save Options in order to re-build and re-cache the LESS. Do not run this on a production site, or face a nuclear meltdown.

LESS Directory
======

The /less directory thats been setup, provides a super clean and convienient way to theme. This directory, mirrors the /less directory found within PageLines. The LESS directory in PageLines contains all the LESS used throughout the framework, encapsulated into single files. The compiler then grabs these files and combines them into a single, virtual, compiled LESS file. If you copy (NOT DELETE), for example `pl-core.less` out of `/pagelines/less/`, and you paste it into `/nicks-base-theme/less`, the compiler will skip over the parent, and run the child instead. This makes for super clean theming methods without a lot of overriding at all.