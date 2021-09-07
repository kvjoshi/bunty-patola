-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 05, 2021 at 09:02 AM
-- Server version: 10.4.15-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u996660230_opal`
--

-- --------------------------------------------------------

--
-- Table structure for table `ant_service`
--

CREATE TABLE `ant_service` (
  `a_id` int(11) NOT NULL,
  `a_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_desc` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_featured`
--

CREATE TABLE `blog_featured` (
  `f_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_featured`
--

INSERT INTO `blog_featured` (`f_id`, `blog_id`) VALUES
(1, 3),
(2, 4),
(3, 4),
(4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `blog_list`
--

CREATE TABLE `blog_list` (
  `blog_id` int(11) NOT NULL,
  `blog_name` text NOT NULL,
  `blog_sub` text NOT NULL,
  `blog_by` text NOT NULL,
  `blog_content` text NOT NULL,
  `blog_image` text NOT NULL,
  `blog_upload` timestamp NOT NULL DEFAULT current_timestamp(),
  `blog_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_list`
--

INSERT INTO `blog_list` (`blog_id`, `blog_name`, `blog_sub`, `blog_by`, `blog_content`, `blog_image`, `blog_upload`, `blog_update`) VALUES
(3, 'Blog Title Test', 'sub tilte test', 'Author test', '                                                                                                                                                                                                        <p>dummy text test</p><h4 style=\"margin: 0.5em 0px 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" lato,=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 16px;=\"\" vertical-align:=\"\" baseline;=\"\" background-image:=\"\" none;=\"\" background-position:=\"\" initial;=\"\" background-size:=\"\" background-repeat:=\"\" background-attachment:=\"\" background-origin:=\"\" background-clip:=\"\" color:=\"\" rgb(34,=\"\" 34,=\"\" 34);\"=\"\">A&nbsp;<b style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; background: none;\">blog</b>&nbsp;(a&nbsp;<a href=\"https://en.m.wikipedia.org/wiki/Clipping_(morphology)\" title=\"Clipping (morphology)\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(107, 75, 161); hyphens: none;\">truncation</a>&nbsp;of \"<b style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; background: none;\">weblog</b>\")<sup id=\"cite_ref-1\" class=\"reference\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant: inherit; font-stretch: inherit; line-height: 1; font-family: inherit; font-size: 0.75em; background: none; unicode-bidi: isolate; white-space: nowrap;\"><a href=\"https://en.m.wikipedia.org/wiki/Blog#cite_note-1\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(107, 75, 161); hyphens: none;\">[1]</a></sup>&nbsp;is a discussion or informational&nbsp;<a href=\"https://en.m.wikipedia.org/wiki/Website\" title=\"Website\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(107, 75, 161); hyphens: none;\">website</a>&nbsp;published on the&nbsp;<a href=\"https://en.m.wikipedia.org/wiki/World_Wide_Web\" title=\"World Wide Web\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(107, 75, 161); hyphens: none;\">World Wide Web</a>&nbsp;consisting of discrete, often informal&nbsp;<a href=\"https://en.m.wikipedia.org/wiki/Diary\" title=\"Diary\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(107, 75, 161); hyphens: none;\">diary</a>-style text entries (posts).</h4><p style=\"margin: 0.5em 0px 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit;\"><br></p><h4 style=\"margin: 0.5em 0px 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" lato,=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 16px;=\"\" vertical-align:=\"\" baseline;=\"\" background-image:=\"\" none;=\"\" background-position:=\"\" initial;=\"\" background-size:=\"\" background-repeat:=\"\" background-attachment:=\"\" background-origin:=\"\" background-clip:=\"\" color:=\"\" rgb(34,=\"\" 34,=\"\" 34);\"=\"\"><iframe src=\"//www.youtube.com/embed/ggxEzR2VRNU\" class=\"note-video-clip\" width=\"640\" height=\"360\" frameborder=\"0\"></iframe><br></h4><h4 style=\"margin: 0.5em 0px 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" lato,=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 16px;=\"\" vertical-align:=\"\" baseline;=\"\" background-image:=\"\" none;=\"\" background-position:=\"\" initial;=\"\" background-size:=\"\" background-repeat:=\"\" background-attachment:=\"\" background-origin:=\"\" background-clip:=\"\" color:=\"\" rgb(34,=\"\" 34,=\"\" 34);\"=\"\"> </h4><blockquote style=\"margin: 0.5em 0px 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" lato,=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 16px;=\"\" vertical-align:=\"\" baseline;=\"\" background-image:=\"\" none;=\"\" background-position:=\"\" initial;=\"\" background-size:=\"\" background-repeat:=\"\" background-attachment:=\"\" background-origin:=\"\" background-clip:=\"\" color:=\"\" rgb(34,=\"\" 34,=\"\" 34);\"=\"\"><p><span style=\"background-color: rgb(255, 255, 0);\">Posts are typically displayed in reverse chronological order, so that</span> the most recent post app<u>ears first, at the top of the</u> web page. Until 2009, blogs were <span style=\"background-color: rgb(0, 255, 255);\">usually the work of a single </span>individual,<sup class=\"noprint Inline-Template Template-Fact\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1; font-family: inherit; font-size: 0.75em; background: none; white-space: nowrap;\">[<i style=\"margin: 0px; padding: 0px; border: 0px; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; background: none;\"><a href=\"https://en.m.wikipedia.org/wiki/Wikipedia:Citation_needed\" title=\"Wikipedia:Citation needed\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(107, 75, 161); hyphens: none;\"><span title=\"This claim needs references to reliable sources. (May 2014)\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; background: none;\">citation needed</span></a></i>]</sup>&nbsp;occasionally of a small group, and often covered a single subject or topic. In the 2010s, \"multi-author blogs\" (MABs) emerged, featuring the writing of multiple authors and sometimes professionally edited. MABs from&nbsp;<a href=\"https://en.m.wikipedia.org/wiki/Newspaper\" title=\"Newspaper\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(107, 75, 161); hyphens: none;\">newspapers</a>, other media outlets,&nbsp;<a href=\"https://en.m.wikipedia.org/wiki/University\" title=\"University\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(107, 75, 161); hyphens: none;\">universities</a>,&nbsp;<a href=\"https://en.m.wikipedia.org/wiki/Think_tank\" title=\"Think tank\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(107, 75, 161); hyphens: none;\">think tanks</a>,&nbsp;<a href=\"https://en.m.wikipedia.org/wiki/Advocacy_group\" title=\"Advocacy group\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(107, 75, 161); hyphens: none;\">advocacy groups</a>, and similar institutions account for an increasing quantity of blog traffic. The rise of&nbsp;<a href=\"https://en.m.wikipedia.org/wiki/Twitter\" title=\"Twitter\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(107, 75, 161); hyphens: none;\">Twitter</a>&nbsp;and other \"<a href=\"https://en.m.wikipedia.org/wiki/Microblogging\" title=\"Microblogging\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(107, 75, 161); hyphens: none;\">microblogging</a>\" systems helps integrate MABs and single-author blogs into the news media.</p><p><br></p><h3><font face=\"Times New Roman\">&nbsp;<i style=\"\">Blog can also be used as a verb, meaning to maintain or add content to a blog.</i></font></h3></blockquote><p style=\"margin: 0.5em 0px 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" lato,=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 16px;=\"\" vertical-align:=\"\" baseline;=\"\" background-image:=\"\" none;=\"\" background-position:=\"\" initial;=\"\" background-size:=\"\" background-repeat:=\"\" background-attachment:=\"\" background-origin:=\"\" background-clip:=\"\" color:=\"\" rgb(34,=\"\" 34,=\"\" 34);\"=\"\">The emergence and growth of blogs in the late 1990s coincided with the advent of web publishing tools that facilitated the posting of content by non-technical users who did not have much experience with&nbsp;<a href=\"https://en.m.wikipedia.org/wiki/HTML\" title=\"HTML\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(107, 75, 161); hyphens: none;\">HTML</a>&nbsp;or&nbsp;<a href=\"https://en.m.wikipedia.org/wiki/Computer_programming\" title=\"Computer programming\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(107, 75, 161); hyphens: none;\">computer programming</a>. Previously, a knowledge of such technologies as&nbsp;<a href=\"https://en.m.wikipedia.org/wiki/HTML\" title=\"HTML\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(107, 75, 161); hyphens: none;\">HTML</a>&nbsp;and&nbsp;<a href=\"https://en.m.wikipedia.org/wiki/File_Transfer_Protocol\" title=\"File Transfer Protocol\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(107, 75, 161); hyphens: none;\">File Transfer Protocol</a>&nbsp;had been required to publish content on the Web, and early Web users therefore tended to be&nbsp;<a href=\"https://en.m.wikipedia.org/wiki/Hacker\" title=\"Hacker\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(107, 75, 161); hyphens: none;\">hackers</a>&nbsp;and computer enthusiasts. In the 2010s, the majority are interactive&nbsp;<a href=\"https://en.m.wikipedia.org/wiki/Web_2.0\" title=\"Web 2.0\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(107, 75, 161); hyphens: none;\">Web 2.0</a>&nbsp;websites, allowing visitors to leave online comments, and it is this interactivity that distinguishes them from other static websites.<sup id=\"cite_ref-2\" class=\"reference\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant: inherit; font-stretch: inherit; line-height: 1; font-family: inherit; font-size: 0.75em; background: none; unicode-bidi: isolate; white-space: nowrap;\"><a href=\"https://en.m.wikipedia.org/wiki/Blog#cite_note-2\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(107, 75, 161); hyphens: none;\">[2]</a></sup>&nbsp;In that sense, blogging can be seen as a form of&nbsp;<a href=\"https://en.m.wikipedia.org/wiki/Social_networking_service\" title=\"Social networking service\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(107, 75, 161); hyphens: none;\">social networking service</a>. Indeed, bloggers do not only produce content to post on their blogs, but also often build social relations with th</p>                                                                                                                                                                                ', 'uploads/21.jpg', '2019-12-12 10:47:51', '2019-12-16 10:43:32'),
(4, 'fdasdf', 'dsafasf', 'asdfasf', '<p>asdfadsffffasdfasdf<br></p>', 'uploads/100_5018 (2).JPG', '2019-12-16 11:01:36', '2019-12-16 11:01:36');

-- --------------------------------------------------------

--
-- Table structure for table `cos_service`
--

CREATE TABLE `cos_service` (
  `c_id` int(11) NOT NULL,
  `c_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_desc` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hair_service`
--

CREATE TABLE `hair_service` (
  `h_id` int(11) NOT NULL,
  `h_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `h_desc` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_slider`
--

CREATE TABLE `home_slider` (
  `s_id` int(11) NOT NULL,
  `s_title` text NOT NULL,
  `s_image` text NOT NULL,
  `s_flag` int(11) NOT NULL,
  `s_link` text NOT NULL,
  `s_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `home_video`
--

CREATE TABLE `home_video` (
  `vid_id` int(11) NOT NULL,
  `vid_link` text NOT NULL,
  `vid_upload` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_video`
--

INSERT INTO `home_video` (`vid_id`, `vid_link`, `vid_upload`) VALUES
(1, 'SqgZ183cW_M', '2020-02-24 14:10:03');

-- --------------------------------------------------------

--
-- Table structure for table `laser_service`
--

CREATE TABLE `laser_service` (
  `l_id` int(11) NOT NULL,
  `l_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_desc` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skin_service`
--

CREATE TABLE `skin_service` (
  `s_id` int(11) NOT NULL,
  `s_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_desc` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_name` text NOT NULL,
  `u_password` text NOT NULL,
  `u_email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `u_password`, `u_email`) VALUES
(1, 'admin', '12345', 'admin@opalclinics.in');

-- --------------------------------------------------------

--
-- Table structure for table `weight_service`
--

CREATE TABLE `weight_service` (
  `w_id` int(11) NOT NULL,
  `w_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `w_desc` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `workshop_list`
--

CREATE TABLE `workshop_list` (
  `ws_id` int(11) NOT NULL,
  `ws_category` int(11) NOT NULL,
  `ws_name` text NOT NULL,
  `ws_date` date NOT NULL,
  `ws_content` text NOT NULL,
  `ws_upload` timestamp NOT NULL DEFAULT current_timestamp(),
  `ws_enable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workshop_list`
--

INSERT INTO `workshop_list` (`ws_id`, `ws_category`, `ws_name`, `ws_date`, `ws_content`, `ws_upload`, `ws_enable`) VALUES
(1, 1, 'test', '2019-12-18', 'test test', '2019-12-12 12:08:08', 0),
(2, 1, 'fasdf', '2019-12-16', 'dsafasdf', '2019-12-16 11:03:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ant_service`
--
ALTER TABLE `ant_service`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `blog_featured`
--
ALTER TABLE `blog_featured`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `blog_list`
--
ALTER TABLE `blog_list`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `cos_service`
--
ALTER TABLE `cos_service`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `hair_service`
--
ALTER TABLE `hair_service`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `home_slider`
--
ALTER TABLE `home_slider`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `home_video`
--
ALTER TABLE `home_video`
  ADD PRIMARY KEY (`vid_id`);

--
-- Indexes for table `laser_service`
--
ALTER TABLE `laser_service`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `skin_service`
--
ALTER TABLE `skin_service`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `weight_service`
--
ALTER TABLE `weight_service`
  ADD PRIMARY KEY (`w_id`);

--
-- Indexes for table `workshop_list`
--
ALTER TABLE `workshop_list`
  ADD PRIMARY KEY (`ws_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ant_service`
--
ALTER TABLE `ant_service`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_featured`
--
ALTER TABLE `blog_featured`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_list`
--
ALTER TABLE `blog_list`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cos_service`
--
ALTER TABLE `cos_service`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hair_service`
--
ALTER TABLE `hair_service`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_slider`
--
ALTER TABLE `home_slider`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_video`
--
ALTER TABLE `home_video`
  MODIFY `vid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `laser_service`
--
ALTER TABLE `laser_service`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skin_service`
--
ALTER TABLE `skin_service`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `weight_service`
--
ALTER TABLE `weight_service`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `workshop_list`
--
ALTER TABLE `workshop_list`
  MODIFY `ws_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
