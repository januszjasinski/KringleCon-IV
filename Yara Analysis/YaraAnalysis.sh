#!/bin/bash

perl -pi -e 's/candycane/c4ndyc4ne/g' ./the_critical_elf_app
perl -pi -e 's/\x72\x6f\x67\x72\x61\x6d\x21\x21/\x72\x6f\x67\x72\x61\x6d\x21\x20/g' ./the_critical_elf_app 
perl -pi -e 's/__frame_dummy_init_array_entry/__fr4me_dummy_init_array_entry/g' ./the_critical_elf_app
perl -pi -e 's/note.gnu.property/n0te.gnu.property/g' ./the_critical_elf_app
perl -pi -e 's/eh_frame_hdr/eh_fr4me_hdr/g' ./the_critical_elf_app
perl -pi -e 's/__FRAME_END__/__FR4ME_END__/g' ./the_critical_elf_app
perl -pi -e 's/__GNU_EH_FRAME_HDR/__GNU_EH_FR4ME_HDR/g' ./the_critical_elf_app
perl -pi -e 's/frame_dummy/fr4me_dummy/g' ./the_critical_elf_app
perl -pi -e 's/note.gnu.build-id/n0te.gnu.build-id/g' ./the_critical_elf_app
perl -pi -e 's/naughty/n4ughty/g' ./the_critical_elf_app
perl -pi -e 's/dastardly/d4stardly/g' ./the_critical_elf_app
perl -pi -e 's/its_a_holly_jolly_variable/its_a_h0lly_j0lly_variable/g' ./the_critical_elf_app
perl -pi -e 's/HolidayHackChallenge/Holid4yH4ckCh4llenge/g' ./the_critical_elf_app
