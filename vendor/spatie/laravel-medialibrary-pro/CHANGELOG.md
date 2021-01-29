# Changelog

This file tracks versions in the [Composer releases](https://github.com/spatie/laravel-medialibrary-pro/releases), and will mostly include notable changes to the Blade components and backend of `laravel-media-library-pro`.

For the changelog for releases on the GitHub Package Registry, look in [CHANGELOG-JS.md](https://github.com/spatie/laravel-medialibrary-pro/blob/master/CHANGELOG-JS.md)

## 1.12.13 - 2020-01-26

- handle edge-case when uuid not set (#165)

## 1.12.12 - 2020-01-25

- properly add `withCredentials` prop

## 1.12.11 - 2020-01-25

- add `withCredentials` prop

## 1.12.10 - 2020-01-25

- add translation for `name`

## 1.12.9 - 2020-01-13

- remove stray console.log

## 1.12.8 - 2020-01-13

- fix icons in Vue 2

## 1.12.7 - 2020-01-09

- fix for Persisting Validation Messages (#150)

## 1.12.6 - 2020-12-29

- Vue2: fix icons

## 1.12.5 - 2020-12-28

- improve support for `generate_thumbnails_for_temporary_uploads` (fixes #125)

## 1.12.4 - 2020-12-23

- React: Properly use the initial value of `validationErrors`

## 1.12.3 - 2020-12-23

- use the `Media` model supplied by the config for updates

## 1.12.2 - 2020-12-15

- use the `Media` model supplied by the config for updates (#128)

## 1.12.1 - 2020-12-04

- use of Livewire upload disk storage (#118)

## 1.12.0 - 2020-12-03

- add PHP 8 support

## 1.11.2 - 2020-12-01

- add a :key to the Livewire attachment component (fixes #112)

## 1.11.1 - 2020-11-30

- use TemporaryUpload model from config (#111)

## 1.11.0 - 2020-11-30

- add support `generate_thumbnails_for_temporary_uploads`

## 1.10.1 - 2020-11-30

- fix JSON translations

## 1.10.0 - 2020-11-28

- add Russian translation

## 1.9.1 - 2020-11-28

- improve session affinity disablement

## 1.9.0 - 2020-11-28

- add German / Romanian translations
- fix `enable_temporary_uploads_session_affinity` config value

## 1.8.0 - 2020-11-27

- add Italian translation (#96)

## 1.7.1 - 2020-11-27

- temporaryUpload now uses the media model from config (#95)

## 1.7.0 - 2020-11-27

- add support for RTL

## 1.6.0 - 2020-11-26

- add support for `enable_temporary_uploads_session_affinity` config value.

## 1.5.2 - 2020-11-26

- enable `withCredentials` for all Axios calls

## 1.5.1 - 2020-11-25

- add dutch translations

## 1.5.0 - 2020-11-25

- add an `uploadDomain` prop to allow uploading files to a separate (sub)domain (JS components)

## 1.4.1 - 2020-11-25

- fix custom properties validation for livewire components

## 1.4.0 - 2020-11-25

- allow debounce value to be passed in `livewireCustomPropertyAttributes`

## 1.3.7 - 2020-11-23

- fix Vue attachment import bug

## 1.3.6 - 2020-11-22

- fix custom file names

## 1.3.5 - 2020-11-22

- fix custom properties (#75)

## 1.3.4 - 2020-11-21

- fix Vue 3 emits option (#68)
- fix Vue 2 dragula warning (#56)

## 1.3.3 - 2020-11-20

- revert changes in 1.3.1

## 1.3.2 - 2020-11-20

- maximize Livewire/Alpine compatibility (#69)

## 1.3.1 - 2020-11-20

- custom properties key fix (#66)

## 1.3.0 - 2020-11-19

- add support for usage inside of Livewire components

## 1.2.0 - 2020-11-19

- add `usingName`

## 1.1.0 - 2020-11-18

- add `usingFileName`

## 1.0.22 - 2020-11-18

- fix migration name in service provider (#59)

## 1.0.21 - 2020-11-18

- use `grid-template-areas` on attachment component

## 1.0.20 - 2020-11-17

- use `all:unset` to reset CSS on component level
- use `grid-template-areas` on component
- move SVG symbols outside component for React and Vue

## 1.0.19 - 2020-11-16

- add default exports to React UI components for Next.js dynamic imports
- add CommonJS build for React components
- fix adding same image twice (JS components)
- fix empty helper text when no validation rules are passed (JS components)

## 1.0.18 - 2020-11-16

- allow setting translations globally (JS components)

## 1.0.17 - 2020-11-16

- fix emits option in Vue 3 renderless component

## 1.0.16 - 2020-11-13

- fix translations in Vue attachment component

## 1.0.15 - 2020-11-13

- correct tag name

## 1.0.14 - 2020-11-13

- add publishable tags

## 1.0.13 - 2020-11-13

- update translations in Vue/React components

## 1.0.12 - 2020-11-13

- translate uploader strings

## 1.0.11 - 2020-11-13

- fix small issues with CSS

## 1.0.10 - 2020-11-13

- add support for translations in the frontend components

## 1.0.9 - 2020-11-13

- add support for translations in the Blade components

## 1.0.7 - 2020-11-12

- fix size in post s3 controller

## 1.0.7 - 2020-11-12

- fix size in post s3 endpoint

## 0.9.5 - 2020-11-04

- check if fileTypeRules is not empty (#35)

## 0.9.0 - 2020-10-27

- beta release
