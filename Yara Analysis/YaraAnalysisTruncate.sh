#!/bin/bash

perl -pi -e 's/candycane/c4ndyc4ne/g' ./the_critical_elf_app
perl -pi -e 's/\x72\x6f\x67\x72\x61\x6d\x21\x21/\x72\x6f\x67\x72\x61\x6d\x21\x20/g' ./the_critical_elf_app 
truncate ./the_critical_elf_app  -s +1m