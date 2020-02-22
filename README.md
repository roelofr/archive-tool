# Roelof's Archive Tool

Create archives of your website, and convert them to a proper archivable format.

## What it do?

This is a tool to make a full copy of a website, for archiving purposes.

The tool does the following, in order:

1. Uses `wget` to make a full, recursive copy of the path given.
1. Determine what file to use as index, based on URL length.
1. Translate all pages to a hash of the URL, keeping track of mutations.
1. Update all HTML, CSS and JS content to point to the new file.
1. Update all HTML to get rid of some trackers and hard-to-transfer content
   like favicons.
1. Adds `robots` meta tag to prevent indexing (archives often represent duplicate content).
1. Convert text contents to UTF-8.

## Disclaimer

This is software that tries to do it's best to archive your website, but comes
with *absolutely no warranty*. Things might break when the translations are
performed and you shoul always verify the result of this software.

