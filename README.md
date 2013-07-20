PHP-twitter-info-parser
=======================

A function that parses twitter info to obtain Followers, Tweets and Following.

#Usage
1. Include simple_html_dom.php at top of your document;
example: include("simple_html_dom.php");

2. Call pasrseTwitter(); with first Argument twitter ID second the string: Tweets, Following or Followers
example:
  $number = parseTwitter('johan2rohan','Tweets');
	echo $number;
