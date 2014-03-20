DocLookup Extra for MODx Revolution
=======================================

Usage:

    [[doclookup &alias=`path/to/document.html`]]

This returns the id of the document with the alias of 'path/to/document.html'

It can be used in other snippet calls, for instance:

```
    [[getImageList?
        &tvname=`quotations`
        &tpl=`quotations`
        &limit=`1`
        &randomize=`1`
        &docid=`[[doclookup? &alias=`admin/quotations.html`]]`
```


Author: Michael Graham <magog@the-wire.com>

