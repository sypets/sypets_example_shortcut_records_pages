Example for reproducing TYPO3 Issue:

Record selector behaves differently depending for pages depending on where you click (left or right column)

## Reproduce

To reproduce, see issue:

* https://forge.typo3.org/issues/99469


## Supported versions

* Tested with TYPO3 v11.5.21


## Install

Without Composer:

```shell
git clone https://github.com/sypets/sypets_example_shortcut_records_pages.git
```

With Composer:

Add to composer.json:

```json
"repositories": {
		"sypets_example_findbyrelation_cli": {
			"type": "git",
			"url": "https://github.com/sypets/sypets_example_shortcut_records_pages.git"
		}
},
```

Run:

```shell
composer require sypets/sypets-example-shortcut-records-pages:dev-main
```

