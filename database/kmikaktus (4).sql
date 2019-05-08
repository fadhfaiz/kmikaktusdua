-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Bulan Mei 2019 pada 15.50
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kmikaktus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `kode_artikel` int(11) NOT NULL,
  `judul` varchar(60) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` int(11) NOT NULL,
  `gambar` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`kode_artikel`, `judul`, `isi`, `tanggal`, `gambar`) VALUES
(2, 'Apa itu Kaktus ?', '<p><span style=\"font-family: Arial, \'MS Sans Serif\', Geneva, Veranda, san-serif; font-size: 16px;\">One of the first things you may want to do is place an image on the page. But how do you make images and words cooperate?&nbsp;</span><br style=\"font-family: Arial, \'MS Sans Serif\', Geneva, Veranda, san-serif; font-size: 16px;\" /><br style=\"font-family: Arial, \'MS Sans Serif\', Geneva, Veranda, san-serif; font-size: 16px;\" /><span style=\"font-family: Arial, \'MS Sans Serif\', Geneva, Veranda, san-serif; font-size: 16px;\">You can position images on the page using the ALIGN attribute, and in this case, you can use the Top, Middle, or Bottom values, as well. The value you choose also will determine how the adjoining text flows around the image if the graphic is included in a block element, such as a paragraph</span></p>\r\n<p>, or in a headline, such as</p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: Arial, \'MS Sans Serif\', Geneva, Veranda, san-serif; font-size: 16px;\">Code, such as the HTML elements and text we present in the following example, will cause the text within the block to display at the top of the image:&nbsp;</span><br style=\"font-family: Arial, \'MS Sans Serif\', Geneva, Veranda, san-serif; font-size: 16px;\" /><br style=\"font-family: Arial, \'MS Sans Serif\', Geneva, Veranda, san-serif; font-size: 16px;\" /><span style=\"font-family: Arial, \'MS Sans Serif\', Geneva, Veranda, san-serif; font-size: 16px;\"><img src=\"&rdquo;building.jpg&rdquo;\" alt=\"\" align=\"&rdquo;top&rdquo;\" />The first line of this text will be positioned at the top of the image. The rest will start below the image, creating a large white space. Fortunately, there is a better way to handle this that more closely resembles what you could do with a desktop publishing program.&nbsp;</span><br style=\"font-family: Arial, \'MS Sans Serif\', Geneva, Veranda, san-serif; font-size: 16px;\" /><br style=\"font-family: Arial, \'MS Sans Serif\', Geneva, Veranda, san-serif; font-size: 16px;\" /><span style=\"font-family: Arial, \'MS Sans Serif\', Geneva, Veranda, san-serif; font-size: 16px;\">The text flow problem in the previous paragraph isn&rsquo;t as evident when you use the Right or Left value, though. Thus, the following code will position the image to the right, with the text flowing neatly on the left side:&nbsp;</span><br style=\"font-family: Arial, \'MS Sans Serif\', Geneva, Veranda, san-serif; font-size: 16px;\" /><br style=\"font-family: Arial, \'MS Sans Serif\', Geneva, Veranda, san-serif; font-size: 16px;\" /><span style=\"font-family: Arial, \'MS Sans Serif\', Geneva, Veranda, san-serif; font-size: 16px;\"><img src=\"&rdquo;building.jpg&rdquo;\" alt=\"\" align=\"&rdquo;right&rdquo;\" />This text flows on the left.&nbsp;</span></p>', 2019, 'Aglaonema.jpg'),
(3, 'lkhsldgslga', '<div id=\"post-2902\" class=\"post-2902 post type-post status-publish format-standard has-post-thumbnail category-how-to how-to\" style=\"box-sizing: border-box; margin: 0px 0px 40px; clear: both; width: 644px; border-bottom: 0px;\">\r\n<div class=\"entry-content\" style=\"box-sizing: border-box; margin-bottom: 10px;\">\r\n<div class=\"KonaBody\" style=\"box-sizing: border-box;\">\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 16px; padding: 0px; color: #404040; font-family: \'Roboto Slab\', \'Lucida Sans Unicode\', \'Lucida Grande\', sans-serif; font-size: 16px;\">In the IMG tag, you simply assign a class to the tag and give it a name. In my example, I named the class&nbsp;<strong style=\"box-sizing: border-box;\">left</strong>. In my stylesheet, all I have to do is add the following code:</p>\r\n<pre style=\"box-sizing: border-box; overflow: auto; font-family: monospace, monospace; font-size: 1em; max-width: 100%;\">.left {\r\n float: left;\r\n padding: 0 10px 0 0;}</pre>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 16px; padding: 0px; color: #404040; font-family: \'Roboto Slab\', \'Lucida Sans Unicode\', \'Lucida Grande\', sans-serif; font-size: 16px;\">As you can see, I added 10px of padding to the right side of the left-aligned image. I also used the float property to move the image out of the normal flow of the document and put it to the left side of the parent container.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 16px; padding: 0px; color: #404040; font-family: \'Roboto Slab\', \'Lucida Sans Unicode\', \'Lucida Grande\', sans-serif; font-size: 16px;\">As you can see, it&rsquo;s much cleaner than adding all that code to the IMG tag itself. It&rsquo;s also easier to manage and you can use a lot more CSS properties to customize the look on your webpage. If you have any questions, feel free to comment. Enjoy!</p>\r\n</div>\r\n</div>\r\n<div class=\"entry-footer\" style=\"box-sizing: border-box; display: table;\">\r\n<div class=\"aboveauthorbox\" style=\"box-sizing: border-box; margin-bottom: 15px; text-align: center;\">\r\n<div id=\"snhb-In_Content_2-0\" class=\"adsense-block\" style=\"box-sizing: border-box; line-height: 1; overflow: hidden; margin-bottom: 0px;\" data-google-query-id=\"CNaA0uTWiOICFVMSaAodpJwBWQ\">\r\n<div id=\"google_ads_iframe_/22152718/sws-hb//helpdeskgeek.com//In_Content_2_0__container__\" style=\"box-sizing: border-box; border: 0pt none;\"><iframe id=\"google_ads_iframe_/22152718/sws-hb//helpdeskgeek.com//In_Content_2_0\" style=\"box-sizing: border-box; max-width: 100%; border-width: 0px; border-style: initial; vertical-align: bottom;\" title=\"3rd party ad content\" name=\"google_ads_iframe_/22152718/sws-hb//helpdeskgeek.com//In_Content_2_0\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" scrolling=\"no\" width=\"300\" height=\"250\" data-google-container-id=\"5\" data-load-complete=\"true\"></iframe></div>\r\n</div>\r\n</div>\r\n<div class=\"authorbox\" style=\"box-sizing: border-box; background-color: #f3f3f4; border: 1px solid #6b6b6b; margin-bottom: 30px; overflow: auto; padding: 15px; width: 644px; display: flex; align-items: center;\">\r\n<div class=\"authoravatar\" style=\"box-sizing: border-box; float: left; margin-right: 10px; margin-top: 8px; width: 73.4375px;\"><img class=\"avatar avatar-96 photo\" style=\"box-sizing: border-box; height: auto; max-width: 100%;\" src=\"https://secure.gravatar.com/avatar/f7cb0b63500ae78f1a87456d4c3a59f5?s=96&amp;d=blank&amp;r=g\" alt=\"\" width=\"96\" height=\"96\" /></div>\r\n<div class=\"authorpostinfo\" style=\"box-sizing: border-box; float: left; width: 514.078px;\">\r\n<div style=\"box-sizing: border-box;\">\r\n<p style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 13px;\">Founder of Help Desk Geek and managing editor. He began blogging in 2007 and quit his job in 2010 to blog full-time. He has over 15 years of industry experience in IT and holds several technical certifications.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"related-posts\" style=\"box-sizing: border-box; margin-bottom: 30px;\">\r\n<h4 id=\"related\" style=\"box-sizing: border-box; color: #111111; font-weight: normal; margin: 0px 0px 4px; font-size: 21px; line-height: 30px;\">Read More Posts:</h4>\r\n<div class=\"related-posts-flex\" style=\"box-sizing: border-box; overflow: auto;\">\r\n<div class=\"related-thumbnails-horizontal\" style=\"box-sizing: border-box; float: left; margin-left: 0px; width: 154.547px;\"><a class=\"related-thumbnail item-image\" style=\"box-sizing: border-box; background-color: transparent; color: #0066cc; outline: none 0px; transition: color 0.3s ease-in-out 0s; display: block;\" href=\"https://helpdeskgeek.com/how-to/instantly-remove-backgrounds-from-images-using-ai/\" rel=\"bookmark\"><img class=\"lazy attachment-pop-posts-thumb size-pop-posts-thumb wp-post-image\" style=\"box-sizing: border-box; height: auto; max-width: 100%; width: 154.547px;\" alt=\"\" width=\"140\" height=\"85\" data-original=\"https://helpdeskgeek.com/wp-content/pictures/2019/01/remove-background-from-image-1-140x85.jpg.webp\" /></a><span style=\"box-sizing: border-box; display: block; margin: 0px auto; width: 139.078px;\"><a class=\"related-thumbnail item-title\" style=\"box-sizing: border-box; background-color: transparent; color: #252525; outline: none 0px; text-decoration-line: none; transition: color 0.3s ease-in-out 0s; font-family: \'Roboto Slab\', \'Lucida Sans Unicode\', \'Lucida Grande\', sans-serif; font-size: 15px; line-height: 18px; vertical-align: top;\" href=\"https://helpdeskgeek.com/how-to/instantly-remove-backgrounds-from-images-using-ai/\" rel=\"bookmark\">Instantly Remove Backgrounds from Images using AI</a></span></div>\r\n<div class=\"related-thumbnails-horizontal\" style=\"box-sizing: border-box; float: left; margin-left: 8px; width: 154.547px;\"><a class=\"related-thumbnail item-image\" style=\"box-sizing: border-box; background-color: transparent; color: #0066cc; outline: none 0px; transition: color 0.3s ease-in-out 0s; display: block;\" href=\"https://helpdeskgeek.com/free-tools-review/benchmark-your-pc-or-mac-with-novabench/\" rel=\"bookmark\"><img class=\"lazy attachment-pop-posts-thumb size-pop-posts-thumb wp-post-image\" style=\"box-sizing: border-box; height: auto; max-width: 100%; width: 154.547px;\" alt=\"\" width=\"140\" height=\"85\" data-original=\"https://helpdeskgeek.com/wp-content/pictures/2011/01/3d-mark-test-1-140x85.jpg.webp\" /></a><span style=\"box-sizing: border-box; display: block; margin: 0px auto; width: 139.078px;\"><a class=\"related-thumbnail item-title\" style=\"box-sizing: border-box; background-color: transparent; color: #252525; outline: none 0px; text-decoration-line: none; transition: color 0.3s ease-in-out 0s; font-family: \'Roboto Slab\', \'Lucida Sans Unicode\', \'Lucida Grande\', sans-serif; font-size: 15px; line-height: 18px; vertical-align: top;\" href=\"https://helpdeskgeek.com/free-tools-review/benchmark-your-pc-or-mac-with-novabench/\" rel=\"bookmark\">3 Free Tools to Benchmark a Windows Gaming PC</a></span></div>\r\n<div class=\"related-thumbnails-horizontal\" style=\"box-sizing: border-box; float: left; margin-left: 8px; width: 154.547px;\"><a class=\"related-thumbnail item-image\" style=\"box-sizing: border-box; background-color: transparent; color: #0066cc; outline: none 0px; transition: color 0.3s ease-in-out 0s; display: block;\" href=\"https://helpdeskgeek.com/networking/connect-to-windows-pc-apple-remote-desktop/\" rel=\"bookmark\"><img class=\"lazy attachment-pop-posts-thumb size-pop-posts-thumb wp-post-image\" style=\"box-sizing: border-box; height: auto; max-width: 100%; width: 154.547px;\" alt=\"\" width=\"140\" height=\"85\" data-original=\"https://helpdeskgeek.com/wp-content/pictures/2009/04/microsoft-remote-desktop-140x85.png.webp\" /></a><span style=\"box-sizing: border-box; display: block; margin: 0px auto; width: 139.078px;\"><a class=\"related-thumbnail item-title\" style=\"box-sizing: border-box; background-color: transparent; color: #252525; outline: none 0px; text-decoration-line: none; transition: color 0.3s ease-in-out 0s; font-family: \'Roboto Slab\', \'Lucida Sans Unicode\', \'Lucida Grande\', sans-serif; font-size: 15px; line-height: 18px; vertical-align: top;\" href=\"https://helpdeskgeek.com/networking/connect-to-windows-pc-apple-remote-desktop/\" rel=\"bookmark\">How to Control a Windows PC using Remote Desktop for Mac</a></span></div>\r\n<div class=\"related-thumbnails-horizontal\" style=\"box-sizing: border-box; float: left; margin-left: 8px; width: 154.547px;\"><a class=\"related-thumbnail item-image\" style=\"box-sizing: border-box; background-color: transparent; color: #0066cc; outline: none 0px; transition: color 0.3s ease-in-out 0s; display: block;\" href=\"https://helpdeskgeek.com/virtualization/vmware-server-web-access-default-username-and-password/\" rel=\"bookmark\"><img class=\"lazy attachment-pop-posts-thumb size-pop-posts-thumb wp-post-image\" style=\"box-sizing: border-box; height: auto; max-width: 100%; width: 154.547px;\" alt=\"\" width=\"140\" height=\"85\" data-original=\"https://helpdeskgeek.com/wp-content/pictures/2011/11/image-thumb42-140x85.png.webp\" /></a><span style=\"box-sizing: border-box; display: block; margin: 0px auto; width: 139.078px;\"><a class=\"related-thumbnail item-title\" style=\"box-sizing: border-box; background-color: transparent; color: #252525; outline: none 0px; text-decoration-line: none; transition: color 0.3s ease-in-out 0s; font-family: \'Roboto Slab\', \'Lucida Sans Unicode\', \'Lucida Grande\', sans-serif; font-size: 15px; line-height: 18px; vertical-align: top;\" href=\"https://helpdeskgeek.com/virtualization/vmware-server-web-access-default-username-and-password/\" rel=\"bookmark\">VMware Server Web Access Default Username and Password</a></span></div>\r\n</div>\r\n</div>\r\n<div class=\"hdg-in-content-bottom\" style=\"box-sizing: border-box; text-align: center;\">\r\n<div id=\"snhb-In_Content_3-0\" class=\"adsense-block\" style=\"box-sizing: border-box; line-height: 1; overflow: hidden; margin-bottom: 20px;\" data-google-query-id=\"CNeA0uTWiOICFVMSaAodpJwBWQ\">\r\n<div id=\"google_ads_iframe_/22152718/sws-hb//helpdeskgeek.com//In_Content_3_0__container__\" style=\"box-sizing: border-box; border: 0pt none;\"><iframe id=\"google_ads_iframe_/22152718/sws-hb//helpdeskgeek.com//In_Content_3_0\" style=\"box-sizing: border-box; max-width: 100%; border-width: 0px; border-style: initial; vertical-align: bottom;\" title=\"3rd party ad content\" name=\"google_ads_iframe_/22152718/sws-hb//helpdeskgeek.com//In_Content_3_0\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" scrolling=\"no\" width=\"640\" height=\"360\" data-google-container-id=\"6\" data-load-complete=\"true\"></iframe></div>\r\n</div>\r\n</div>\r\n<div id=\"social-signup-2\" class=\"widget social-signup\" style=\"box-sizing: border-box; background: #13a638; clear: both; margin: 0px; overflow: hidden; width: 336px; border: 1px solid #cccccc; padding: 20px;\">\r\n<h4 class=\"widgettitle\" style=\"box-sizing: border-box; color: #ffffff; font-weight: 400; margin: 0px 0px 20px; font-size: 20px; line-height: 24px; text-align: center; font-family: Roboto, \'Lucida Sans Unicode\', \'Lucida Grande\', sans-serif;\">Daily Email Newsletter</h4>\r\n<div id=\"mc_embed_signup\" class=\"sidebar-signup-form\" style=\"box-sizing: border-box; border-bottom: 1px solid #f8ede6; margin: 0px 0px 10px; padding: 0px 0px 10px;\"><form id=\"mc-embedded-subscribe-form\" class=\"validate\" style=\"box-sizing: border-box;\" action=\"https://online-tech-tips.us7.list-manage.com/subscribe/post?u=cea4775e8e99a3e05dd31829e&amp;id=9806833103\" method=\"post\" name=\"mc-embedded-subscribe-form\" target=\"_blank\">\r\n<div id=\"mc_embed_signup_scroll\" style=\"box-sizing: border-box;\">\r\n<div class=\"mc-field-group\" style=\"box-sizing: border-box; background: #ffffff; border: 1px solid #cccccc; border-radius: 4px; margin: 0px auto; padding: 3px 5px; width: 240px;\"><input id=\"mce-EMAIL\" class=\"required email sideform-email\" style=\"font-style: italic; font-variant: inherit; font-stretch: inherit; font-size: inherit; font-family: inherit; margin: 0px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border-width: 0px; border-style: none; outline: none 0px; vertical-align: top; width: 205px;\" type=\"email\" name=\"EMAIL\" value=\"\" />&nbsp;<input id=\"mc-embedded-subscribe\" class=\"sideform-submit\" style=\"color: #333333; font-style: italic; font-variant: inherit; font-stretch: inherit; font-size: 14px; font-family: inherit; margin: 0px; cursor: pointer; -webkit-appearance: none; background: #ffffff; border-width: 0px; border-style: none; border-color: initial; outline: none 0px; vertical-align: top; border-radius: 0px; padding: 0px; width: auto;\" type=\"submit\" name=\"subscribe\" value=\"?\" /></div>\r\n<div id=\"mce-responses\" class=\"clear\" style=\"box-sizing: border-box;\">&nbsp;</div>\r\n<div style=\"box-sizing: border-box; position: absolute; left: -5000px;\"><input style=\"font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; font-family: inherit; margin: 0px;\" tabindex=\"-1\" type=\"text\" name=\"b_cea4775e8e99a3e05dd31829e_15faf51d16\" value=\"\" /></div>\r\n</div>\r\n</form></div>\r\n<div class=\"social-links\" style=\"box-sizing: border-box; text-align: center; width: 294px;\">&nbsp;</div>\r\n</div>\r\n<div id=\"text-10\" class=\"widget widget_text\" style=\"box-sizing: border-box; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; clear: both; margin: 20px 0px 0px; overflow: hidden; width: 336px;\">\r\n<div class=\"textwidget\" style=\"box-sizing: border-box;\">\r\n<div style=\"box-sizing: border-box; text-align: center;\">\r\n<div id=\"snhb-sidebar_1-0\" class=\"adsense-block\" style=\"box-sizing: border-box; line-height: 1; overflow: hidden; margin-bottom: 20px; padding: 0px;\" data-google-query-id=\"CNKA0uTWiOICFVMSaAodpJwBWQ\">\r\n<div id=\"google_ads_iframe_/22152718/sws-hb//helpdeskgeek.com//sidebar_1_0__container__\" style=\"box-sizing: border-box; border: 0pt none;\"><iframe id=\"google_ads_iframe_/22152718/sws-hb//helpdeskgeek.com//sidebar_1_0\" style=\"box-sizing: border-box; max-width: 100%; border-width: 0px; border-style: initial; vertical-align: bottom;\" title=\"3rd party ad content\" name=\"google_ads_iframe_/22152718/sws-hb//helpdeskgeek.com//sidebar_1_0\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" scrolling=\"no\" width=\"300\" height=\"250\" data-google-container-id=\"1\" data-load-complete=\"true\"></iframe></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"featured-posts-2\" class=\"widget featured-posts widget-post-list\" style=\"box-sizing: border-box; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; clear: both; margin: 20px 0px 0px; overflow: hidden; width: 336px;\">\r\n<h4 class=\"widgettitle\" style=\"box-sizing: border-box; color: #13a638; font-weight: 400; margin: 0px 0px 20px; font-size: 20px; line-height: 28px; font-family: Roboto, \'Lucida Sans Unicode\', \'Lucida Grande\', sans-serif;\">Featured Posts</h4>\r\n<ul style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none; width: 336px;\">\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 15px; display: inline-block; vertical-align: top; width: 336px;\"><a class=\"item-image\" style=\"box-sizing: border-box; background-color: transparent; color: #0066cc; outline: none 0px; transition: color 0.3s ease-in-out 0s; display: block; padding: 4px; float: left; margin: 0px 10px 0px 0px; vertical-align: top;\" title=\"How to Remove Shortcut Virus in USB using CMD\" href=\"https://helpdeskgeek.com/featured-posts/how-to-remove-shortcut-virus-in-usb-using-cmd/\" rel=\"bookmark\"><img class=\"lazy attachment-side-bar-thumb size-side-bar-thumb wp-post-image\" style=\"box-sizing: border-box; height: auto; max-width: 80px; margin: 0px;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC\" alt=\"\" width=\"130\" height=\"85\" data-original=\"https://helpdeskgeek.com/wp-content/pictures/2019/03/autoplay-130x85.png.webp\" /></a><a class=\"item-title\" style=\"box-sizing: border-box; background-color: transparent; color: #252525; outline: none 0px; text-decoration-line: none; transition: color 0.3s ease-in-out 0s; display: block; padding: 4px; font-family: \'Roboto Slab\', \'Lucida Sans Unicode\', \'Lucida Grande\', sans-serif; font-size: 15px; line-height: 18px; vertical-align: top;\" title=\"How to Remove Shortcut Virus in USB using CMD\" href=\"https://helpdeskgeek.com/featured-posts/how-to-remove-shortcut-virus-in-usb-using-cmd/\" rel=\"bookmark\">How to Remove Shortcut Virus in USB using CMD</a></li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 15px; display: inline-block; vertical-align: top; width: 336px;\"><a class=\"item-image\" style=\"box-sizing: border-box; background-color: transparent; color: #0066cc; outline: none 0px; transition: color 0.3s ease-in-out 0s; display: block; padding: 4px; float: left; margin: 0px 10px 0px 0px; vertical-align: top;\" title=\"What Does End of Life Mean for Software and Should You Care?\" href=\"https://helpdeskgeek.com/featured-posts/what-does-end-of-life-mean-for-software-and-should-you-care/\" rel=\"bookmark\"><img class=\"lazy attachment-side-bar-thumb size-side-bar-thumb wp-post-image\" style=\"box-sizing: border-box; height: auto; max-width: 80px; margin: 0px;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC\" alt=\"\" width=\"130\" height=\"85\" data-original=\"https://helpdeskgeek.com/wp-content/pictures/2019/03/product-end-of-life-1-130x85.jpeg\" /></a><a class=\"item-title\" style=\"box-sizing: border-box; background-color: transparent; color: #252525; outline: none 0px; text-decoration-line: none; transition: color 0.3s ease-in-out 0s; display: block; padding: 4px; font-family: \'Roboto Slab\', \'Lucida Sans Unicode\', \'Lucida Grande\', sans-serif; font-size: 15px; line-height: 18px; vertical-align: top;\" title=\"What Does End of Life Mean for Software and Should You Care?\" href=\"https://helpdeskgeek.com/featured-posts/what-does-end-of-life-mean-for-software-and-should-you-care/\" rel=\"bookmark\">What Does End of Life Mean for Software and Should You Care?</a></li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 15px; display: inline-block; vertical-align: top; width: 336px;\"><a class=\"item-image\" style=\"box-sizing: border-box; background-color: transparent; color: #0066cc; outline: none 0px; transition: color 0.3s ease-in-out 0s; display: block; padding: 4px; float: left; margin: 0px 10px 0px 0px; vertical-align: top;\" title=\"99 of the Best Windows Freeware Programs You May Not Know Of\" href=\"https://helpdeskgeek.com/free-tools-review/best-freeware-programs-for-windows/\" rel=\"bookmark\"><img class=\"lazy attachment-side-bar-thumb size-side-bar-thumb wp-post-image\" style=\"box-sizing: border-box; height: auto; max-width: 80px; margin: 0px;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC\" alt=\"\" width=\"130\" height=\"85\" data-original=\"https://helpdeskgeek.com/wp-content/pictures/2009/10/freeware-130x85.png.webp\" /></a><a class=\"item-title\" style=\"box-sizing: border-box; background-color: transparent; color: #252525; outline: none 0px; text-decoration-line: none; transition: color 0.3s ease-in-out 0s; display: block; padding: 4px; font-family: \'Roboto Slab\', \'Lucida Sans Unicode\', \'Lucida Grande\', sans-serif; font-size: 15px; line-height: 18px; vertical-align: top;\" title=\"99 of the Best Windows Freeware Programs You May Not Know Of\" href=\"https://helpdeskgeek.com/free-tools-review/best-freeware-programs-for-windows/\" rel=\"bookmark\">99 of the Best Windows Freeware Programs You May Not Know Of</a></li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 15px; display: inline-block; vertical-align: top; width: 336px;\"><a class=\"item-image\" style=\"box-sizing: border-box; background-color: transparent; color: #0066cc; outline: none 0px; transition: color 0.3s ease-in-out 0s; display: block; padding: 4px; float: left; margin: 0px 10px 0px 0px; vertical-align: top;\" title=\"CPU Processor Comparison &ndash; Intel Core i9 vs i7 vs i5 vs i3\" href=\"https://helpdeskgeek.com/reviews/intel-core-i9-vs-i7-vs-i5-vs-i3/\" rel=\"bookmark\"><img class=\"lazy attachment-side-bar-thumb size-side-bar-thumb wp-post-image\" style=\"box-sizing: border-box; height: auto; max-width: 80px; margin: 0px;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC\" alt=\"\" width=\"130\" height=\"85\" data-original=\"https://helpdeskgeek.com/wp-content/pictures/2010/03/corei5processor-130x85.png.webp\" /></a><a class=\"item-title\" style=\"box-sizing: border-box; background-color: transparent; color: #252525; outline: none 0px; text-decoration-line: none; transition: color 0.3s ease-in-out 0s; display: block; padding: 4px; font-family: \'Roboto Slab\', \'Lucida Sans Unicode\', \'Lucida Grande\', sans-serif; font-size: 15px; line-height: 18px; vertical-align: top;\" title=\"CPU Processor Comparison &ndash; Intel Core i9 vs i7 vs i5 vs i3\" href=\"https://helpdeskgeek.com/reviews/intel-core-i9-vs-i7-vs-i5-vs-i3/\" rel=\"bookmark\">CPU Processor Comparison &ndash; Intel Core i9 vs i7 vs i5 vs i3</a></li>\r\n</ul>\r\n</div>\r\n<div id=\"text-11\" class=\"widget widget_text\" style=\"box-sizing: border-box; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; clear: both; margin: 20px 0px 0px; overflow: hidden; width: 336px;\">\r\n<div class=\"textwidget\" style=\"box-sizing: border-box;\">\r\n<div style=\"box-sizing: border-box; text-align: center;\">\r\n<div id=\"snhb-sidebar_2-0\" class=\"adsense-block\" style=\"box-sizing: border-box; line-height: 1; overflow: hidden; margin-bottom: 20px; padding: 0px;\" data-google-query-id=\"CNOA0uTWiOICFVMSaAodpJwBWQ\">\r\n<div id=\"google_ads_iframe_/22152718/sws-hb//helpdeskgeek.com//sidebar_2_0__container__\" style=\"box-sizing: border-box; border: 0pt none;\"><iframe id=\"google_ads_iframe_/22152718/sws-hb//helpdeskgeek.com//sidebar_2_0\" style=\"box-sizing: border-box; max-width: 100%; border-width: 0px; border-style: initial; vertical-align: bottom;\" title=\"3rd party ad content\" name=\"google_ads_iframe_/22152718/sws-hb//helpdeskgeek.com//sidebar_2_0\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" scrolling=\"no\" width=\"300\" height=\"250\" data-google-container-id=\"2\"></iframe></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"recent-posts-3\" class=\"widget recent-posts widget-post-list\" style=\"box-sizing: border-box; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; clear: both; margin: 20px 0px 0px; overflow: hidden; width: 336px;\">\r\n<h4 class=\"widgettitle\" style=\"box-sizing: border-box; color: #13a638; font-weight: 400; margin: 0px 0px 20px; font-size: 20px; line-height: 28px; font-family: Roboto, \'Lucida Sans Unicode\', \'Lucida Grande\', sans-serif;\">Recent Posts</h4>\r\n<ul style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none; width: 336px;\">\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 15px; display: inline-block; vertical-align: top; width: 336px;\"><a class=\"item-image\" style=\"box-sizing: border-box; background-color: transparent; color: #0066cc; outline: none 0px; transition: color 0.3s ease-in-out 0s; display: block; padding: 4px; float: left; margin: 0px 10px 0px 0px; vertical-align: top;\" title=\"Windows Update Won&rsquo;t Install Updates? How to Fix This Issue\" href=\"https://helpdeskgeek.com/windows-10/windows-update-wont-install-updates-how-to-fix-this-issue/\" rel=\"bookmark\"><img class=\"lazy attachment-side-bar-thumb size-side-bar-thumb wp-post-image\" style=\"box-sizing: border-box; height: auto; max-width: 80px; margin: 0px; display: inline;\" src=\"https://helpdeskgeek.com/wp-content/pictures/2019/04/restart-130x85.png.webp\" alt=\"\" width=\"130\" height=\"85\" data-original=\"https://helpdeskgeek.com/wp-content/pictures/2019/04/restart-130x85.png.webp\" /></a><a class=\"item-title\" style=\"box-sizing: border-box; background-color: transparent; color: #252525; outline: none 0px; text-decoration-line: none; transition: color 0.3s ease-in-out 0s; display: block; padding: 4px; font-family: \'Roboto Slab\', \'Lucida Sans Unicode\', \'Lucida Grande\', sans-serif; font-size: 15px; line-height: 18px; vertical-align: top;\" title=\"Windows Update Won&rsquo;t Install Updates? How to Fix This Issue\" href=\"https://helpdeskgeek.com/windows-10/windows-update-wont-install-updates-how-to-fix-this-issue/\" rel=\"bookmark\">Windows Update Won&rsquo;t Install Updates? How to Fix This Issue</a></li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 15px; display: inline-block; vertical-align: top; width: 336px;\"><a class=\"item-image\" style=\"box-sizing: border-box; background-color: transparent; color: #0066cc; outline: none 0px; transition: color 0.3s ease-in-out 0s; display: block; padding: 4px; float: left; margin: 0px 10px 0px 0px; vertical-align: top;\" title=\"Retrieve Excel Data From a Web Page Directly\" href=\"https://helpdeskgeek.com/how-to/retrieve-excel-data-from-a-web-page-directly/\" rel=\"bookmark\"><img class=\"lazy attachment-side-bar-thumb size-side-bar-thumb wp-post-image\" style=\"box-sizing: border-box; height: auto; max-width: 80px; margin: 0px; display: inline;\" src=\"https://helpdeskgeek.com/wp-content/pictures/2019/04/excel-data-1-130x85.jpeg\" alt=\"\" width=\"130\" height=\"85\" data-original=\"https://helpdeskgeek.com/wp-content/pictures/2019/04/excel-data-1-130x85.jpeg\" /></a><a class=\"item-title\" style=\"box-sizing: border-box; background-color: transparent; color: #252525; outline: none 0px; text-decoration-line: none; transition: color 0.3s ease-in-out 0s; display: block; padding: 4px; font-family: \'Roboto Slab\', \'Lucida Sans Unicode\', \'Lucida Grande\', sans-serif; font-size: 15px; line-height: 18px; vertical-align: top;\" title=\"Retrieve Excel Data From a Web Page Directly\" href=\"https://helpdeskgeek.com/how-to/retrieve-excel-data-from-a-web-page-directly/\" rel=\"bookmark\">Retrieve Excel Data From a Web Page Directly</a></li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 15px; display: inline-block; vertical-align: top; width: 336px;\"><a class=\"item-image\" style=\"box-sizing: border-box; background-color: transparent; color: #0066cc; outline: none 0px; transition: color 0.3s ease-in-out 0s; display: block; padding: 4px; float: left; margin: 0px 10px 0px 0px; vertical-align: top;\" title=\"How to Find Your Bluetooth Adapter Version in Windows 10\" href=\"https://helpdeskgeek.com/windows-10/how-to-find-your-bluetooth-adapter-version-in-windows-10/\" rel=\"bookmark\"><img class=\"lazy attachment-side-bar-thumb size-side-bar-thumb wp-post-image\" style=\"box-sizing: border-box; height: auto; max-width: 80px; margin: 0px; display: inline;\" src=\"https://helpdeskgeek.com/wp-content/pictures/2019/04/bluetooth-130x85.png.webp\" alt=\"\" width=\"130\" height=\"85\" data-original=\"https://helpdeskgeek.com/wp-content/pictures/2019/04/bluetooth-130x85.png.webp\" /></a><a class=\"item-title\" style=\"box-sizing: border-box; background-color: transparent; color: #252525; outline: none 0px; text-decoration-line: none; transition: color 0.3s ease-in-out 0s; display: block; padding: 4px; font-family: \'Roboto Slab\', \'Lucida Sans Unicode\', \'Lucida Grande\', sans-serif; font-size: 15px; line-height: 18px; vertical-align: top;\" title=\"How to Find Your Bluetooth Adapter Version in Windows 10\" href=\"https://helpdeskgeek.com/windows-10/how-to-find-your-bluetooth-adapter-version-in-windows-10/\" rel=\"bookmark\">How to Find Your Bluetooth Adapter Version in Windows 10</a></li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 15px; display: inline-block; vertical-align: top; width: 336px;\"><a class=\"item-image\" style=\"box-sizing: border-box; background-color: transparent; color: #0066cc; outline: none 0px; transition: color 0.3s ease-in-out 0s; display: block; padding: 4px; float: left; margin: 0px 10px 0px 0px; vertical-align: top;\" title=\"How to Password Protect a USB Flash Drive\" href=\"https://helpdeskgeek.com/how-to/how-to-password-protect-a-usb-flash-drive/\" rel=\"bookmark\"><img class=\"lazy attachment-side-bar-thumb size-side-bar-thumb wp-post-image\" style=\"box-sizing: border-box; height: auto; max-width: 80px; margin: 0px; display: inline;\" src=\"https://helpdeskgeek.com/wp-content/pictures/2019/04/usb-130x85.jpg.webp\" alt=\"\" width=\"130\" height=\"85\" data-original=\"https://helpdeskgeek.com/wp-content/pictures/2019/04/usb-130x85.jpg.webp\" /></a><a class=\"item-title\" style=\"box-sizing: border-box; background-color: transparent; color: #252525; outline: none 0px; text-decoration-line: none; transition: color 0.3s ease-in-out 0s; display: block; padding: 4px; font-family: \'Roboto Slab\', \'Lucida Sans Unicode\', \'Lucida Grande\', sans-serif; font-size: 15px; line-height: 18px; vertical-align: top;\" title=\"How to Password Protect a USB Flash Drive\" href=\"https://helpdeskgeek.com/how-to/how-to-password-protect-a-usb-flash-drive/\" rel=\"bookmark\">How to Password Protect a USB Flash Drive</a></li>\r\n</ul>\r\n</div>\r\n<div id=\"posts-random-2\" class=\"widget posts-random widget-post-list\" style=\"box-sizing: border-box; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; clear: both; margin: 20px 0px 0px; overflow: hidden; width: 336px;\">\r\n<h4 class=\"widgettitle\" style=\"box-sizing: border-box; color: #13a638; font-weight: 400; margin: 0px 0px 20px; font-size: 20px; line-height: 28px; font-family: Roboto, \'Lucida Sans Unicode\', \'Lucida Grande\', sans-serif;\">Random Posts</h4>\r\n<ul style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none; width: 336px;\">\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 15px; display: inline-block; vertical-align: top; width: 336px;\"><a class=\"item-image\" style=\"box-sizing: border-box; background-color: transparent; color: #0066cc; outline: none 0px; transition: color 0.3s ease-in-out 0s; display: block; padding: 4px; float: left; margin: 0px 10px 0px 0px; vertical-align: top;\" title=\"Bridge Network Connections in Windows 7/8/10\" href=\"https://helpdeskgeek.com/how-to/bridge-network-connections-in-windows-7-8-10/\" rel=\"bookmark\"><img class=\"lazy attachment-side-bar-thumb size-side-bar-thumb wp-post-image\" style=\"box-sizing: border-box; height: auto; max-width: 80px; margin: 0px; display: inline;\" src=\"https://helpdeskgeek.com/wp-content/pictures/2011/11/image_thumb201-130x85.png.webp\" alt=\"\" width=\"130\" height=\"85\" data-original=\"https://helpdeskgeek.com/wp-content/pictures/2011/11/image_thumb201-130x85.png.webp\" /></a><a class=\"item-title\" style=\"box-sizing: border-box; background-color: transparent; color: #252525; outline: none 0px; text-decoration-line: none; transition: color 0.3s ease-in-out 0s; display: block; padding: 4px; font-family: \'Roboto Slab\', \'Lucida Sans Unicode\', \'Lucida Grande\', sans-serif; font-size: 15px; line-height: 18px; vertical-align: top;\" title=\"Bridge Network Connections in Windows 7/8/10\" href=\"https://helpdeskgeek.com/how-to/bridge-network-connections-in-windows-7-8-10/\" rel=\"bookmark\">Bridge Network Connections in Windows 7/8/10</a></li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 15px; display: inline-block; vertical-align: top; width: 336px;\"><a class=\"item-image\" style=\"box-sizing: border-box; background-color: transparent; color: #0066cc; outline: none 0px; transition: color 0.3s ease-in-out 0s; display: block; padding: 4px; float: left; margin: 0px 10px 0px 0px; vertical-align: top;\" title=\"How to Record Your Screen on Windows 10\" href=\"https://helpdeskgeek.com/windows-10/how-to-record-your-screen-on-windows-10/\" rel=\"bookmark\"><img class=\"lazy attachment-side-bar-thumb size-side-bar-thumb wp-post-image\" style=\"box-sizing: border-box; height: auto; max-width: 80px; margin: 0px; display: inline;\" src=\"https://helpdeskgeek.com/wp-content/pictures/2018/12/obs-window-capture-130x85.png.webp\" alt=\"\" width=\"130\" height=\"85\" data-original=\"https://helpdeskgeek.com/wp-content/pictures/2018/12/obs-window-capture-130x85.png.webp\" /></a><a class=\"item-title\" style=\"box-sizing: border-box; background-color: transparent; color: #252525; outline: none 0px; text-decoration-line: none; transition: color 0.3s ease-in-out 0s; display: block; padding: 4px; font-family: \'Roboto Slab\', \'Lucida Sans Unicode\', \'Lucida Grande\', sans-serif; font-size: 15px; line-height: 18px; vertical-align: top;\" title=\"How to Record Your Screen on Windows 10\" href=\"https://helpdeskgeek.com/windows-10/how-to-record-your-screen-on-windows-10/\" rel=\"bookmark\">How to Record Your Screen on Windows 10</a></li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 15px; display: inline-block; vertical-align: top; width: 336px;\"><a class=\"item-image\" style=\"box-sizing: border-box; background-color: transparent; color: #0066cc; outline: none 0px; transition: color 0.3s ease-in-out 0s; display: block; padding: 4px; float: left; margin: 0px 10px 0px 0px; vertical-align: top;\" title=\"Uninstall and Reinstall IE in Windows 7\" href=\"https://helpdeskgeek.com/how-to/how-to-reinstall-internet-explorer-in-windows-7/\" rel=\"bookmark\"><img class=\"lazy attachment-side-bar-thumb size-side-bar-thumb wp-post-image\" style=\"box-sizing: border-box; height: auto; max-width: 80px; margin: 0px; display: inline;\" src=\"https://helpdeskgeek.com/wp-content/pictures/2012/06/programs-and-features1-150x150-130x85.jpg.webp\" alt=\"\" width=\"130\" height=\"85\" data-original=\"https://helpdeskgeek.com/wp-content/pictures/2012/06/programs-and-features1-150x150-130x85.jpg.webp\" /></a><a class=\"item-title\" style=\"box-sizing: border-box; background-color: transparent; color: #252525; outline: none 0px; text-decoration-line: none; transition: color 0.3s ease-in-out 0s; display: block; padding: 4px; font-family: \'Roboto Slab\', \'Lucida Sans Unicode\', \'Lucida Grande\', sans-serif; font-size: 15px; line-height: 18px; vertical-align: top;\" title=\"Uninstall and Reinstall IE in Windows 7\" href=\"https://helpdeskgeek.com/how-to/how-to-reinstall-internet-explorer-in-windows-7/\" rel=\"bookmark\">Uninstall and Reinstall IE in Windows 7</a></li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 15px; display: inline-block; vertical-align: top; width: 336px;\"><a class=\"item-image\" style=\"box-sizing: border-box; background-color: transparent; color: #0066cc; outline: none 0px; transition: color 0.3s ease-in-out 0s; display: block; padding: 4px; float: left; margin: 0px 10px 0px 0px; vertical-align: top;\" title=\"Open an HTML File in Google Chrome\" href=\"https://helpdeskgeek.com/how-to/open-an-html-file-in-google-chrome/\" rel=\"bookmark\"><img class=\"lazy attachment-side-bar-thumb size-side-bar-thumb wp-post-image\" style=\"box-sizing: border-box; height: auto; max-width: 80px; margin: 0px; display: inline;\" src=\"https://helpdeskgeek.com/wp-content/pictures/2011/11/01_open_file_option_in_firefox_thumb-130x85.png.webp\" alt=\"\" width=\"130\" height=\"85\" data-original=\"https://helpdeskgeek.com/wp-content/pictures/2011/11/01_open_file_option_in_firefox_thumb-130x85.png.webp\" /></a><a class=\"item-title\" style=\"box-sizing: border-box; background-color: transparent; color: #252525; outline: none 0px; text-decoration-line: none; transition: color 0.3s ease-in-out 0s; display: block; padding: 4px; font-family: \'Roboto Slab\', \'Lucida Sans Unicode\', \'Lucida Grande\', sans-serif; font-size: 15px; line-height: 18px; vertical-align: top;\" title=\"Open an HTML File in Google Chrome\" href=\"https://helpdeskgeek.com/how-to/open-an-html-file-in-google-chrome/\" rel=\"bookmark\">Open an HTML File in Google Chrome</a></li>\r\n</ul>\r\n</div>\r\n<div id=\"text-13\" class=\"widget widget_text\" style=\"box-sizing: border-box; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; clear: both; margin: 20px 0px 0px; overflow: hidden; width: 336px; position: sticky; top: 15px;\">\r\n<div class=\"textwidget\" style=\"box-sizing: border-box;\">\r\n<div style=\"box-sizing: border-box; color: #222222; font-family: \'Roboto Slab\', \'Lucida Sans Unicode\', \'Lucida Grande\', sans-serif; text-align: center;\">\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 16px; padding: 0px;\">&nbsp;</p>\r\n<div id=\"snhb-sidebar_3-0\" class=\"adsense-block\" style=\"box-sizing: border-box; line-height: 1; overflow: hidden; margin-bottom: 20px; padding: 0px;\" data-google-query-id=\"CNSA0uTWiOICFVMSaAodpJwBWQ\">\r\n<div id=\"google_ads_iframe_/22152718/sws-hb//helpdeskgeek.com//sidebar_3_0__container__\" style=\"box-sizing: border-box; border: 0pt none;\"><iframe id=\"google_ads_iframe_/22152718/sws-hb//helpdeskgeek.com//sidebar_3_0\" style=\"box-sizing: border-box; max-width: 100%; border-width: 0px; border-style: initial; vertical-align: bottom;\" title=\"3rd party ad content\" name=\"google_ads_iframe_/22152718/sws-hb//helpdeskgeek.com//sidebar_3_0\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" scrolling=\"no\" width=\"300\" height=\"250\" data-google-container-id=\"3\" data-load-complete=\"true\"></iframe></div>\r\n<p>&nbsp;</p>\r\n</div>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 16px; padding: 0px;\">&nbsp;</p>\r\n</div>\r\n</div>\r\n</div>', 1557206671, 'care1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` char(5) NOT NULL,
  `nama_pembeli` varchar(40) DEFAULT NULL,
  `no_telp` char(13) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `kecamatan` varchar(35) DEFAULT NULL,
  `kabupaten` varchar(35) DEFAULT NULL,
  `provinsi` varchar(35) DEFAULT NULL,
  `kodepos` char(5) NOT NULL,
  `alamat_lengkap` varchar(50) DEFAULT NULL,
  `catatan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama_pembeli`, `no_telp`, `email`, `kecamatan`, `kabupaten`, `provinsi`, `kodepos`, `alamat_lengkap`, `catatan`) VALUES
('PM001', 'Wahyu Shofian', '085200554942', 'wahyushofian@gmail.com', 'Nitikan', 'Bantul', 'Yogyakarta', '55571', 'Jl. Nitikan, Bantul, DIY', 'Jangan kirim barang second ya gan'),
('PM002', 'Faadihilah Ahnaf Faiz', '08577432571', 'fadhfaiz@gmail.com', 'Sewon', 'Bantul', 'Yogyakarta', '53718', 'Widoro, Bangunharjo, Mbantul', 'Jangan kirim dompet kulit ya gan'),
('PM003', 'Intan Destiyanti', '082132454333', 'idestiyanti@gmail.com', 'Umbulharjo', 'Bantul', 'Yogyakarta', '53218', 'Jl. Dr. Soepomo, Umbulharjo', 'Packing mantap gan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjual`
--

CREATE TABLE `penjual` (
  `id_penjual` char(1) NOT NULL,
  `nama_penjual` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` char(13) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penjual`
--

INSERT INTO `penjual` (`id_penjual`, `nama_penjual`, `email`, `no_telp`, `username`, `password`) VALUES
('1', 'Dewi Soyusiawaty', 'my_soyus@yahoo.com', '085200554942', 'kaktuskmi', 'aglonema');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `kode_produk` char(5) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `stok_produk` int(3) NOT NULL,
  `diameter` int(3) NOT NULL,
  `tinggi` int(3) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `jenis_produk` varchar(30) NOT NULL,
  `catatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`kode_produk`, `nama_produk`, `harga_produk`, `stok_produk`, `diameter`, `tinggi`, `gambar`, `jenis_produk`, `catatan`) VALUES
('', 'ghhg', 45000, 12, 12, 12, '', 'Aglonema', 'nothing'),
('KK001', 'Cephalocereus Senilis', 10000, 1, 1, 1, 'P3.PNG', 'Sukulen', ''),
('KK002', 'Cereus Tetragonous', 20000, 2, 2, 2, 'P4.PNG', 'Sukulen', ''),
('KK003', 'Cereus Peruvianus', 30000, 3, 3, 3, 'P5.PNG', 'Sukulen', ''),
('KK004', 'Echeveria Purposorum', 40000, 4, 4, 4, 'P6.PNG', 'Sukulen', ''),
('KK005', 'Astrophythum Capricorne', 50000, 5, 5, 5, 'P7.PNG', 'Sukulen', ''),
('KK006', 'Astrophythum Asterias', 60000, 6, 6, 6, 'P3.PNG', 'Sukulen', ''),
('KK007', 'Astrophythum Myriostigma', 70000, 7, 7, 7, 'P4.PNG', 'Sukulen', ''),
('KK008', 'Astrophythum Ornatum', 80000, 8, 8, 8, 'P5.PNG', 'Sukulen', ''),
('KK009', 'Echinopsis Ancistrophora', 90000, 9, 9, 9, 'P6.PNG', 'Sukulen', ''),
('KK010', 'Echinopsis Atacamensis', 10000, 10, 10, 10, 'P7.PNG', 'Sukulen', ''),
('KK011', 'Echinopsis Chiloensis', 11000, 11, 11, 11, 'P3.PNG', 'Sukulen', ''),
('KK012', 'Echinopsis Oxygona', 12000, 12, 12, 12, 'P4.PNG', 'Sukulen', ''),
('KK013', 'Echinopsis Spaciana', 130001, 13, 13, 13, 'P5.PNG', 'Sukulen', ''),
('KK014', 'Echinopsis Terscheckii', 14000, 14, 14, 14, 'P6.PNG', 'Sukulen', ''),
('KK015', 'Trichocereus Spachianus ', 15000, 15, 15, 15, 'P5.PNG', 'Sukulen', ''),
('KK016', 'Acanthocalycium Thionanthum', 16000, 16, 16, 16, 'P7.PNG', 'Sukulen', ''),
('KK017', 'Echinocactus Grusonii', 17000, 17, 17, 17, 'P3.PNG', 'Sukulen', ''),
('KK018', 'Aloe Aristata Cactus', 18000, 18, 18, 18, 'P4.PNG', 'Sukulen', ''),
('KK019', 'Aloe Erinacea', 19000, 19, 19, 19, 'P5.PNG', 'Sukulen', ''),
('KK020', 'Aloe Jucunda', 20000, 20, 20, 20, 'P6.PNG', 'Sukulen', ''),
('KK021', 'Ariocarpus Confusus', 21000, 21, 21, 21, 'P7.PNG', 'Sukulen', ''),
('KK022', 'Ariocarpus Fissuratus', 22000, 22, 22, 22, 'P5.PNG', 'Sukulen', ''),
('KK023', 'Aglaonema Bidadari', 23000, 23, 23, 23, 'P4.png', 'Aglaonema', ''),
('KK025', 'Sansevieria Canaliculata', 25000, 25, 25, 25, 'P7.png', 'Sansevieria', ''),
('KK026', 'Sansevieria Pinguicula', 26000, 26, 26, 26, 'P5.png', 'Sansievieria', ''),
('KK027', 'Alocasia', 27000, 27, 27, 27, 'P7.png', 'Tanaman Hias Lainnya', ''),
('KK028', 'Anthurium', 28000, 28, 28, 28, 'P4.png', 'Tanaman Hias Lainnya', ''),
('Ko24', 'Aglaonema Bride of Sumatera', 24000, 24, 24, 24, 'P6.png', 'Aglaonema', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbcounter`
--

CREATE TABLE `tbcounter` (
  `ip` varchar(2050) NOT NULL,
  `date` date NOT NULL,
  `hits` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbcounter`
--

INSERT INTO `tbcounter` (`ip`, `date`, `hits`) VALUES
('10.88.25.1', '2016-01-16', 11),
('10.88.25.2', '2016-01-16', 3),
('10.88.25.3', '2016-01-17', 4),
('10.88.25.4', '2016-01-16', 11),
('10.88.25.5', '2016-02-16', 3),
('10.88.25.6', '2016-02-17', 4),
('10.88.25.10', '2016-02-23', 2),
('10.88.25.15', '2016-02-23', 1),
('10.88.25.13', '2016-03-16', 11),
('10.88.25.1', '2016-03-16', 3),
('10.88.25.5', '2016-03-17', 4),
('10.88.25.8', '2016-03-16', 11),
('10.88.25.10', '2016-03-16', 3),
('10.88.25.19', '2016-03-17', 4),
('10.88.25.27', '2016-04-23', 2),
('10.88.25.50', '2016-04-23', 1),
('10.88.25.6', '2016-04-16', 3),
('10.88.25.9', '2016-05-17', 4),
('10.88.25.11', '2016-05-23', 2),
('10.88.25.12', '2016-05-23', 1),
('10.88.25.16', '2016-05-16', 11),
('10.88.25.20', '2016-05-16', 3),
('10.88.25.32', '2016-06-17', 4),
('10.88.25.1', '2016-06-16', 11),
('10.88.25.35', '2016-06-16', 3),
('10.88.25.36', '2016-07-17', 4),
('10.88.25.26', '2016-07-23', 2),
('10.88.25.6', '2016-07-16', 3),
('10.88.25.9', '2016-08-17', 4),
('10.88.25.11', '2016-08-23', 2),
('10.88.25.12', '2016-08-23', 1),
('10.88.25.16', '2016-08-16', 11),
('10.88.25.20', '2016-08-06', 3),
('10.88.25.32', '2016-09-17', 4),
('10.88.25.1', '2016-09-16', 11),
('10.88.25.35', '2016-09-16', 3),
('10.88.25.36', '2016-09-17', 4),
('10.88.25.26', '2016-09-23', 2),
('10.88.25.16', '2016-10-16', 11),
('10.88.25.20', '2016-10-16', 3),
('10.88.25.32', '2016-10-17', 4),
('10.88.25.1', '2016-10-16', 11),
('10.88.25.35', '2016-11-16', 3),
('10.88.25.36', '2016-11-17', 4),
('10.88.25.26', '2016-11-23', 2),
('10.88.25.15', '2016-11-23', 1),
('10.88.25.13', '2016-12-16', 11),
('10.88.25.1', '2016-12-16', 3),
('10.88.25.5', '2016-12-17', 4),
('10.88.25.8', '2016-12-16', 11),
('10.88.25.10', '2016-12-16', 3),
('10.88.25.19', '2016-12-17', 4),
('10.88.25.27', '2016-12-23', 2),
('10.88.25.50', '2016-12-23', 1),
('10.88.25.6', '2016-12-16', 3),
('10.88.25.9', '2016-12-17', 4),
('10.88.25.11', '2016-12-23', 2),
('10.88.25.12', '2016-12-23', 1),
('10.88.25.20', '2016-12-25', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `kode_pesanan` char(5) NOT NULL,
  `id_pembeli` char(5) DEFAULT NULL,
  `kode_produk` char(5) DEFAULT NULL,
  `total_harga` int(10) DEFAULT NULL,
  `ongkir` int(10) DEFAULT NULL,
  `status` varchar(25) DEFAULT NULL,
  `jumlah_produk` int(3) DEFAULT NULL,
  `tanggal_beli` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`kode_pesanan`, `id_pembeli`, `kode_produk`, `total_harga`, `ongkir`, `status`, `jumlah_produk`, `tanggal_beli`) VALUES
('PES01', 'PM001', 'KK001', 145000, 10000, 'Upload Struk Bayar', 1, '2019-05-01'),
('PES02', 'PM002', 'KK002', 150000, 15000, 'Lunas', 1, '2019-05-02'),
('PES03', 'PM003', 'KK003', 135000, 10000, 'Tunggu Ongkir', 1, '2019-05-03');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`kode_artikel`);

--
-- Indeks untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indeks untuk tabel `penjual`
--
ALTER TABLE `penjual`
  ADD PRIMARY KEY (`id_penjual`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kode_produk`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kode_pesanan`),
  ADD KEY `id_pembeli` (`id_pembeli`,`kode_produk`),
  ADD KEY `kode_produk` (`kode_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `kode_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`kode_produk`) REFERENCES `produk` (`kode_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
