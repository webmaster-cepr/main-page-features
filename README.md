<h3>mod_mainpagefeatures</h3>

This is a Joomla 2.5 module that displays content in a rotating feature box.

AUTHORS

Matthew Sedlar. The Joomla software and default templates are copyright 2005-2012 Open Source Matters, Inc. and covered under a GNU General Public License.

CONTACT

If you have problems, questions, ideas or suggestions, contact webmaster@cepr.net.

WEBSITE

http://www.cepr.net.

ChangeLog

1.3
* Time added to parameters. Now user can select number of seconds for the boxes to display. If time is not saved, features will not rotate. Default is 5 seconds.
* Javascript functions moved inline into the module itself, except the bit that needs to be loaded with the page. That still needs to be placed in the head tags of the template. 

1.2
* Added ability to select the boxes, stopping the cycle feature.

1.1
* Some headlines were not getting links based on accidentally leftover if/else statements. Fixed.

COPYING/LICENSE

The Joomla software and default templates are copyright 2005-2012 Open Source Matters, Inc. and covered under a GNU General Public License.

BUGS

None at this time.

INSTALLATION

Zip all files except the js folder and install via Joomla's Extension Manager. Javascript can either be placed in your template's head tags or in an external .js file. 

Requirements
* This module was tested with jQuery 1.10.2, so I cannot speak for older versions. Should be referenced in your template's head tags.
* This module was tested with Joomla 2.5.14.

