# easy-Speak Localization
[![License: GNU General Public License 2.0](https://img.shields.io/badge/license-GPL%202.0-blue)](LICENSE)

This repository contains [English](en_GB) and [Slovak](sk_SK) language files for easy-Speak, which is a Toastmaster automation platform based on [phpBB](https://www.phpbb.com/).

## Note to translators
If you'd like to create a new translation for easy-Speak you have two options:
- Contact easy-Speak developers who set up an environment for you to do the translation through an easy-Speak UI. It's the official and recommended approach. On the other hand, developers get requests to add a new language only once in a few years, and it takes time for them to figure all steps out. Also, this tool is not entirely user-friendly.
- Alternatively, download this repository, create a new directory (e.g., `cs_CZ`), copy files either from [en_GB](en_GB) or [sk_SK](sk_SK), and do the translation. Then send a zipped archive to the developers who, in turn, set up a testing environment for your language. As an advantage, you can use whatever tool to do the translation, like [Weblate](https://weblate.org/). Note that lines in the exported translated file may be out-of-order, which is alright as far as all strings are there. easy-Speak files contain several duplicate string and/or empty strings which the translation tool ignores. We advise checking the resulting file manually. However, you can directly translate these files in any text editor.

If you decide to translate files from this repository, feel free to reach out so that we can add your translation here as a backup. easy-Speak code is not publicly available, and we don't know how well it is protected against data losses or corruption. Most likely, you don't want to lose your work.

## Testing
Before your translation goes live on `tmclub.eu`, developers need to verify that it works properly, and the system still works flawlessly. All the development, testing, and translation (if you do it the official way) is done on a webpage [districtwebmasters.org](https://districtwebmasters.org). You need to create an account the same way as on `tmclub.eu`. Then, developers will set your account to be a club president for a club called `language_name Translation Group`, and they give you a way how to translate strings and test them. If you do the translation outside of this tool, they need to upload the files manually into the system. *Club president* can have other officers with different permissions like to do only the translation or to be a reviewer.

Once the environment is running in your language, you can proceed with testing; you can go through all the screens, find bugs like that a word is too long to fit the screen. Also, try to organize placeholder meetings and check out received e-mails. Maybe you'll need to adapt your translation so that all the content in the e-mail makes perfect sense. Because easy-Speak is a relatively outdated software it's not possible to have a perfect translation. Often, the text contains placeholders filled with phrases with English syntax. Your task is to make sure that your translation is as much natural as possible, and that people can use the tool without hassle.

## Contact
If you want to translate easy-Speak, feel free to contact Vladimír Záhradník (author of Slovak translation) at vladimir@zahradnik.io, or Kit Barritt (easy-Speak developer) at kitbarritt@gmail.com.
Please remember we all do this as volunteers. Our responses may be delayed, but we'll gladly help!

## License
Because easy-Speak is based on [phpBB](https://www.phpbb.com/), we need to keep the project license for our derived works. Files are therefore licensed under [GNU General Public License 2.0](LICENSE) license.