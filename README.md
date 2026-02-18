# Counter Content Element for TYPO3 CMS

`ce_counter` adds a configurable counter / countdown content element to TYPO3.  
It ships with multiple layouts, supports several counters on the same page and lets you fully control labels and formatting.

## Status & Compatibility

- **Status:** stable  
- **Extension key:** `ce_counter`  
- **Composer package:** `kohlercode/ce-counter`  
- **TYPO3 versions:** **14.0.0 – 14.99.99**

Download from the TER: <https://extensions.typo3.org/extension/ce_counter/>

## Live demo

<https://kohlercode.com/products/typo3-extensions/counter-content-element>

## Features

- Visual countdown / counter to a configurable date and time
- Three integrated layouts: default, fancy and plain Bootstrap markup
- Support for multiple counters on the same page
- Customizable labels (e.g. `days,hours,minutes,seconds`)
- Customizable format (e.g. `d,h,m,s`)
- Ready-to-use TypoScript site set (`Counter: Basic Setup`)

## Requirements

- TYPO3 CMS **14.0.0 – 14.99.99**
- PHP version according to the supported TYPO3 core version

## Installation

### Via Composer (recommended)

```bash
composer require kohlercode/ce-counter
```

Then activate the extension in the TYPO3 Extension Manager.

### Via Extension Manager / TER

1. Download `ce_counter` from the TER (`ce_counter` extension).  
2. Install and activate it in the Extension Manager.

## Configuration

1. **Include TypoScript**
   - Use the site configuration and add the site set **“Counter: Basic Setup”**, or
   - Include the TypoScript in an extension template.
2. **Create a new content element**
   - Add a new content element of type **“Counter”** (`CType = ce_counter`).
   - Configure:
     - Target date / time
     - Whether the counter stops at zero
     - Labels (e.g. `days,hours,minutes,seconds`)
     - Format (e.g. `d,h,m,s`)

## Upgrade notes from older versions

When upgrading from older major versions (e.g. 2.x / 3.x):

- Install and overwrite the extension.  
- Make sure the TypoScript is integrated via the site set or an extension template.  
- Fill the new fields **“format”** and **“labels”** for existing `ce_counter` content elements.

## Support & service

If you have any problems or ideas for improvements, please open an issue on GitHub or get in touch: <https://kohlercode.com/contact>

Since this is open source software, I can only guarantee full, priority support on paid engagements – but I do my best to support the community whenever possible.

## Your donation makes a difference

Keep TYPO3 extensions alive & evolving:

- <https://kohlercode.com/donate>
