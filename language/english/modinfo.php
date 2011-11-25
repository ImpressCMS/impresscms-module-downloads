<?php
/**
 * 'Downloads' is a light weight download handling module for ImpressCMS
 *
 * File: /language/english/modinfo.php
 *
 * English language constants related to module information
 * 
 * @copyright	Copyright QM-B (Steffen Flohrer) 2011
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * ----------------------------------------------------------------------------------------------------------
 * 				Downloads
 * @since		1.00
 * @author		QM-B <qm-b@hotmail.de>
 * @version		$Id$
 * @package		downloads
 * 
 */

// general informations
define("_MI_DOWNLOADS_NAME", "Downloads");
define("_MI_DOWNLOADS_DSC", "'Downloads' is a module for handling file-downloads, which can handle file-uploads and categorize them so they can be downloaded from userside.");

// templates
define("_MI_DOWNLOADS_INDEX_TPL", "'Downloads' index page in frontend");
define("_MI_DOWNLOADS_HEADER_TPL", "'Downloads' header contains breadcrumb");
define("_MI_DOWNLOADS_ADMIN_FORM_TPL", "'Downloads' Admin form");
define("_AM_DOWNLOADS_REQUIREMENTS_TPL", "'Downloads' Requirements check");
define("_MI_DOWNLOADS_FOOTER_TPL", "'Downloads' footer contains notifications and comment rules");
define("_MI_DOWNLOADS_CATEGORY_TPL", "'Downloads' category view in frontend");
define("_MI_DOWNLOADS_DOWNLOAD_TPL", "'Downloads' single file view in frontend");
define("_AM_DOWNLOADS_DISCLAIMER_TPL", "'Downloads' DISCLAIMER view in frontend");
define("_AM_DOWNLOADS_BROKEN_TPL", "'Downloads' report broken files in frontend");

// blocks
define("_MI_DOWNLOADS_BLOCK_RECENT_DOWNLOADS", "Download List");
define("_MI_DOWNLOADS_BLOCK_RECENT_DOWNLOADS_DSC", "List the latest published downloads");
define("_MI_DOWNLOADS_BLOCK_CATEGORY_MENU", "Category Menu");
define("_MI_DOWNLOADS_BLOCK_CATEGORY_MENU_DSC", "List all categories or select one to display subcategories");
// config
define("_MI_DOWNLOADS_AUTHORIZED_GROUPS", "Groups allowed to add categories");
define("_MI_DOWNLOADS_AUTHORIZED_GROUPS_DSC", "Select the groups which are allowed to create new categories. Please note that a user belonging to one of these groups will be able to create categories directly on the site. The module currently has no moderation feature.");
define("_MI_DOWNLOADS_DATE_FORMAT", "Date format");
define("_MI_DOWNLOADS_DATE_FORMAT_DSC", "For more informations: <a href=\"http://php.net/manual/en/function.date.php\" target=\"blank\">see php.net manual</a>");
define("_MI_DOWNLOADS_SHOW_BREADCRUMBS", "show breadcrumb");
define("_MI_DOWNLOADS_SHOW_BREADCRUMBS_DSC", "choose 'YES' to show breadcrumb in frontend");
define("_MI_DOWNLOADS_SHOW_DOWNLOADS", "show Files");
define("_MI_DOWNLOADS_SHOW_DOWNLOADS_DSC", "How many Files should be displayed before using page navigation?");
define("_MI_DOWNLOADS_SHOW_CATEGORIES", "Show Categories");
define("_MI_DOWNLOADS_SHOW_CATEGORIES_DSC", "How many Categories should be displayed at one page");
define("_MI_DOWNLOADS_THUMBNAIL_WIDTH", "Thumbnail width");
define("_MI_DOWNLOADS_THUMBNAIL_WIDTH_DSC", "choose width of thumbnails");
define("_MI_DOWNLOADS_THUMBNAIL_HEIGHT", "Thumbnail height");
define("_MI_DOWNLOADS_THUMBNAIL_HEIGHT_DSC", "choose width of thumbnails");
define("_MI_DOWNLOADS_THUMBNAIL_MARGIN_TOP", "margin top");
define("_MI_DOWNLOADS_THUMBNAIL_MARGIN_BOTTOM", "margin bottom");
define("_MI_DOWNLOADS_THUMBNAIL_MARGIN_LEFT", "margin left");
define("_MI_DOWNLOADS_THUMBNAIL_MARGIN_RIGHT", "margin right");
define("_MI_DOWNLOADS_THUMBNAIL_MARGIN_DSC", "set margin for thumbnails");
define("_MI_DOWNLOADS_IMAGE_UPLOAD_WIDTH", "image upload width");
define("_MI_DOWNLOADS_IMAGE_UPLOAD_WIDTH_DSC", "set max width for uploading images");
define("_MI_DOWNLOADS_IMAGE_UPLOAD_HEIGHT", "image upload height");
define("_MI_DOWNLOADS_IMAGE_UPLOAD_HEIGHT_DSC", "set max height for uploading images");
define("_MI_DOWNLOADS_IMAGE_FILE_SIZE", "image file size");
define("_MI_DOWNLOADS_IMAGE_FILE_SIZE_DSC", "set max file size for uploading");
define("_MI_DOWNLOADS_UPLOAD_FILE_SIZE", "max file size");
define("_MI_DOWNLOADS_UPLOAD_FILE_SIZE_DSC", "set max file size for uploading");
define("_MI_DOWNLOADS_LIMITS", "file limitations");
define("_MI_DOWNLOADS_LIMITS_DSC", "file limitations can be select while creating/adding a new file. Seperate all limitations with '|'");
define("_MI_DOWNLOADS_VERSIONTYPES", "file version type");
define("_MI_DOWNLOADS_VERSIONTYPES_DSC", "file version types can be select while creating/adding a new file. Seperate all version types with '|'");
define("_MI_DOWNLOADS_SHOWDISCLAIMER", "Show disclaimer, before an user can upload new files?");
define("_MI_DOWNLOADS_SHOWDISCLAIMER_DSC", "Select 'YES' to show the disclaimer before an user can upload new files ");
define("_MI_DOWNLOADS_DISCLAIMER", "Disclaimer for Fileupload");
define("_MI_DOWNLOADS_UPL_DISCLAIMER_TEXT", "<h1>Terms of Service for {ICMS_SITENAME}:</h1>
												<p>{ICMS_SITENAME} reserves the right to remove any image or file for any reason what ever. Specifically, any image/file uploaded that infringes upon copyrights not held by the uploader, is illegal or violates any laws, will be immediately deleted and the IP address of the uploaded reported to authorities. Violating these terms will result in termination of your ability to upload further images/files.
												Do not link or embed images hosted on this service into a large-scale, non- forum website. You may link or embed images hosted on this service in personal sites, message boards, and individual online auctions.</p>
												<p>By uploading images to {ICMS_SITENAME} you give permission for the owners of {ICMS_SITENAME} to publish your images in any way or form, meaning websites, print, etc. You will not be compensated by {ICMS_SITENAME} for any loss what ever!</p>
												<p>We reserve the right to ban any individual uploader or website from using our services for any reason.</p>
												<p>All images uploaded are copyright © their respective owners.</p>
												<h2>Privacy Policy :</h2> 
												<p>{ICMS_SITENAME} collects user's IP address, the time at which user uploaded a file, and the file's URL. This data is not shared with any third party companies or individuals (unless the file in question is deemed to be in violation of these Terms of Service, in which case this data may be shared with law enforcement entities), and is used to enforce these Terms of Service as well as to resolve any legal matters that may arise due to violations of the Terms of Service. </p>
												<h2>Legal Policy:</h2> 
												<p>These Terms of Service are subject to change without prior warning to its users. By using {ICMS_SITENAME}, user agrees not to involve {ICMS_SITENAME} in any type of legal action. {ICMS_SITENAME} directs full legal responsibility of the contents of the files that are uploaded to {ICMS_SITENAME} to individual users, and will cooperate with law enforcement entities in the case that uploaded files are deemed to be in violation of these Terms of Service. </p>
												<p>All files are © to their respective owners · All other content © {ICMS_SITENAME}. {ICMS_SITENAME} is not responsible for the content any uploaded files, nor is it in affiliation with any entities that may be represented in the uploaded files.</p>");
define("_MI_DOWNLOADS_SHOW_DOWN_DISCL", "Show disclaimer, before an user can download new files?");
define("_MI_DOWNLOADS_SHOW_DOWN_DISCL_DSC", "Select 'YES' to show the disclaimer before an user can upload new files");
define("_MI_DOWNLOADS_DOWN_DISCLAIMER", "Disclaimer for Filedownload");
define("_MI_DOWNLOADS_DOWN_DISCLAIMER_TEXT", "<h1>TERMS OF USE</h1>
												<p>All products available for download through this site are provided by third party software/scripts publishers pursuant to license agreements or other arrangements between such publishers and the end user. We disclaim any responsibility for or liability related to the software/scripts. Any questions complaints or claims related to the software should be directed to the appropriate Author or Company responsible for developing the software. We make no representations or warranties of any kind concerning the quality, safety or suitability of the software/script, either expressed or implied, including without limitation any implied warranties of merchantability, fitness for a particular purpose, or non-infringement. We make no representation or warrantie as to the truth, accuracy or completeness of any statements, information or materials concerning the software/script that is contained on and within any of the websites owned and operated by us. In no event will we be liable for any indirect, punitive, special, incidental or consequential damages however they may arise and even if we have been previously advised of the possibility of such damages. There are inherent dangers in the use of any software/script available for download on the Internet, and we caution you to make sure that you completely understand the potential risks before downloading any of the software/scripts. You are solely responsible for adequate protection and backup of the data and equipment used in connection with any of the software, and we will not be liable for any damages that you may suffer in connection with using, modifying or distributing any of the software.</p>
												<h2>PRIVACY STATEMENT</h2>
												<p>We record visits to this web site and logs the following information for statistical purposes: the user's server or proxy address, the date/time of the visit and the files requested. The information is used to analyse our server traffic. No attempt will be made to identify users or their browsing activities except where authorized by law. For example in the event of an investigation, a law enforcement agency may exercise their legal authority to inspect the internet service provider's logs. If you send us an email message or contact as via contact form, we will record your contact details. This information will only be used for the purpose for which you have provided it. We will not use your email for any other purpose and will not disclose it without your consent except where such use or disclosure is permitted under an exception provided in the Privacy Act. When users choose to join a mailing list their details are added to that specific mailing list and used for the stated purpose of that list only.</p>
												<h2>LINKING</h2>
												<p>Links to external web sites are inserted for convenience and do not constitute endorsement of material at those sites, or any associated organization, product or service.</p>");
define("_MI_DOWNLOADS_PLATFORM", "file platform requirements");
define("_MI_DOWNLOADS_PLATFORM_DSC", "file platform requirements can be select while creating/adding a new file. Seperate all platform requirements with '|'");
define("_MI_DOWNLOADS_LICENSE", "file license");
define("_MI_DOWNLOADS_LICENSE_DSC", "set the file licenses you need for your published files. The license can be selected while uploading/editing a file and will be displayed in frontent.");
define("_MI_DOWNLOADS_USE_RSS", "Use RSS-Feeds?");
define("_MI_DOWNLOADS_USE_RSS_DSC", "Set to 'YES' to provide a rss link.");
define("_MI_DOWNLOADS_USE_CATALOGUE", "Use 'catalogue' module?");
define("_MI_DOWNLOADS_USE_CATALOGUE_DSC", "You can use catalogue module to sell file downloads. Catalogue needs to be installed! You'll get a list of catalogue items to link a file with an item. If an item is selected you'll not get a download link, but a link to the item to add it to your card. Also the price of the item will be displayd.");
define("_MI_DOWNLOADS_USE_ALBUM", "use 'Album' module?");
define("_MI_DOWNLOADS_USE_ALBUM_DSC", "You can use an album for file screenshots instead of the usual 4 screenshots provided by 'Downloads' module. 'Album' needs to be installed! ");
define("_MI_DOWNLOADS_USE_MIRROR", "Use mirror system?");
define("_MI_DOWNLOADS_USE_MIRROR_DSC", "Select yes, if you like to use a download mirror.");
define("_MI_DOWNLOADS_MIRROR_APPROVE", "Do you need approvals for new mirrors?");
define("_MI_DOWNLOADS_MIRROR_APPROVE_DSC", "Select 'YES' if you prefer to approve the mirrors first, before providing the link");
define("_MI_DOWNLOADS_DOWNLOAD_APPROVE", "Do you need approvals for new files?");
define("_MI_DOWNLOADS_DOWNLOAD_APPROVE_DSC", "Select 'YES' if you prefer to approve the files uploaded in frontend first, before providing the file");
define("_MI_DOWNLOADS_CATEGORY_APPROVE", "Do you need approvals for new categories?");
define("_MI_DOWNLOADS_CATEGORY_APPROVE_DSC", "Select 'YES' if you prefer to approve the new categories created on frontend first, before providing the link");
define("_MI_DOWNLOADS_POPULAR", "How many downloads of one file before it's popular");
define("_MI_DOWNLOADS_DAYSNEW", "How many days to provide one file as new");
define("_MI_DOWNLOADS_DAYSUPDATED", "How many days to provide one file as updated after editing");
define("_MI_DOWNLOADS_MIMETYPES", "Allowed Mimetypes");
define("_MI_DOWNLOADS_MIMETYPES_DSC", "Enter the Mimetypes you want to allow for file/imageupload. For more Informations about the system mimetypes go to system->media->mime types");
// Notifications
define("_MI_DOWNLOADS_GLOBAL_NOTIFY", "All Categories");
define("_MI_DOWNLOADS_GLOBAL_NOTIFY_DSC", "Notifications related to all Categories in the module");
define("_MI_DOWNLOADS_GLOBAL_CATEGORY_PUBLISHED_NOTIFY", "New Category published");
define("_MI_DOWNLOADS_GLOBAL_CATEGORY_PUBLISHED_NOTIFY_CAP", "Notify me when a new Category has been published");
define("_MI_DOWNLOADS_GLOBAL_CATEGORY_PUBLISHED_NOTIFY_DSC", "Receive notification when any new Category is published.");
define("_MI_DOWNLOADS_GLOBAL_CATEGORY_PUBLISHED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notify : New Category published");
// ACP menu
define("_MI_DOWNLOADS_MENU_INDEX", "Index");
define("_MI_DOWNLOADS_MENU_DOWNLOAD", "Manage Files");
define("_MI_DOWNLOADS_MENU_CATEGORY", "Manage Categories");
define("_MI_DOWNLOADS_MENU_INDEXPAGE", "Edit Indexpage");
define("_MI_DOWNLOADS_MENU_TEMPLATES", "Templates");
define("_MI_DOWNLOADS_MENU_RATINGS", "Ratings");
define("_MI_DOWNLOADS_MENU_MANUAL", "Manual");
// Submenu while calling a tab
define("_MI_DOWNLOADS_DOWNLOAD_EDIT", "Edit your File");
define("_MI_DOWNLOADS_DOWNLOAD_CREATINGNEW", "Upload a new File");
define("_MI_DOWNLOADS_CATEGORY_EDIT", "Edit your Category");
define("_MI_DOWNLOADS_CATEGORY_CREATINGNEW", "Create a new Category");