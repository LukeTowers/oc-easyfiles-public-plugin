# About

Easy to use file manager plugin for OctoberCMS that allows you to share your files with frontend users. Based on the built-in Media Manager, this plugin is easy to configure to your needs. Great for sharing files with frontend users from any filesystem defined in your project!

# Requirements

This plugin requires the [Ajax Framework](https://octobercms.com/docs/cms/ajax) to be included in your layout/page in order to handle requests.

# Installation

To install from the [Marketplace](https://octobercms.com/plugin/luketowers-easyfiles), click on the "Add to Project" button and then select the project you wish to add it to before updating the project to pull in the plugin. The plugin is paid, so you will need to purchase it before adding it to a project.

To install from the backend, go to **Settings -> Updates & Plugins -> Install Plugins** and then search for `LukeTowers.EasyFiles`.

# Usage

This plugin registers a single component (fileBrowser) that you can add to your CMS pages. It supports the following configuration options:

Option | Description
------------- | -------------
**disk** | (string, default: 'local') The Storage disk defined in config/filesystems.php to use for this instance of the component
**folder** | (string, default: '') The folder on the disk to use as the root folder for this instance of the component
**includeStyles** | (boolean, default: true) Whether to include the base October styles or not (october.css, storm.css)
**allowUploads** | (boolean, default: false) Whether or not to allow uploads

This component can be customized further by copying partials from `/modules/backend/widgets/mediamanager/partials` to `/themes/myactivetheme/partials/componentAlias/` (for a specific alias of the component) or `/themes/myactivetheme/partials/fileBrowser/` (for the component in general) and modifying as required.

> **NOTE**: These partials are [backend partials](https://octobercms.com/docs/backend/views-partials) that use PHP, not [frontend partials](https://octobercms.com/docs/cms/partials) that use Twig.

# Protecting the component

To protect this component from being access by unauthorized users, you can put it on a page with the `session` component from [RainLab.User](https://octobercms.com/plugin/rainlab-user).

<a name="storage-disks"></a>
# Storage Disks

As stated above, this plugin supports any storage disk / driver that Laravel supports. This includes built in disks / drivers like `local` or `ftp` but also includes custom drivers like [SFTP](https://github.com/thephpleague/flysystem-sftp), [AWS S3](http://octobercms.com/plugin/october-drivers), [Rackspace](http://octobercms.com/plugin/october-drivers), [Microsoft Azure Blob Storage](http://octobercms.com/plugin/pvaass-azurefiledriver), [Dropbox](https://octobercms.com/plugin/renatio-dropboxadapter), and even [Google Drive](https://octobercms.com/plugin/luketowers-gdrivefilesystemdriver)

> **NOTE**: These drivers need to be installed and configured separately before they can be used for this plugin

# Reporting Issues

If you find a bug in this plugin, or would like a feature added, please use the [public repository's Issues section](https://github.com/LukeTowers/oc-easyfiles-public-plugin/issues). If you find a security vulnerability or have an urgent issue that needs to be addressed, please contact me directly at octobercms@luketowers.ca.
