<?php
/**
 * Фильтр сообщений (разметка):
 */
class TexyHelper
{
	/**
	 * Регулярные выражения для видео:
	 */
	const YOUTUBE_REGEXP = '%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i';

	/**
	 * Метод создания объекта Texy:
	 */
	private static function createTexyObject($post_link = true, $board = null)
	{
		$texy = new Texy();
		$texy -> mergeLines = false;
		$texy -> htmlOutputModule -> baseIndent  = 6;
		$texy -> typographyModule -> locale = 'fr';

		$texy->registerLinePattern(
			array('TexyHelper', 'trollface'),
			'/:trollface:/',
			'TexyHelper_trollface'
		);

		$texy->registerLinePattern(
			array('TexyHelper', 'coolface'),
			'/:coolface:/',
			'TexyHelper_coolface'
		);

		$texy->registerLinePattern(
			array('TexyHelper', 'sobak'),
			'/:sobak:/',
			'TexyHelper_sobak'
		);

		$texy->registerLinePattern(
			array('TexyHelper', 'desu'),
			'/:desu:/',
			'TexyHelper_desu'
		);

		$texy->registerLinePattern(
			array('TexyHelper', 'rage'),
			'/:rage:/',
			'TexyHelper_rage'
		);

		$texy->registerLinePattern(
			array('TexyHelper', 'ffuu'),
			'/:f+u+:/',
			'TexyHelper_ffuu'
		);

		$texy->registerLinePattern(
			array('TexyHelper', 'okay'),
			'/:okay:/',
			'TexyHelper_okay'
		);

		$texy->registerLinePattern(
			array('TexyHelper', 'omsk'),
			'/:omsk:/',
			'TexyHelper_omsk'
		);

		$texy->registerLinePattern(
			array('TexyHelper', 'awesome'),
			'/:awesome:/',
			'TexyHelper_awesome'
		);

		$texy->registerLinePattern(
			array('TexyHelper', 'nyan'),
			'/:nyan:/',
			'TexyHelper_nyan'
		);
		
		$texy->registerLinePattern(
			array('TexyHelper', 'popka'),
			'/:popka:/',
			'TexyHelper_popka'
		);

		$texy->registerLinePattern(
			array('TexyHelper', 'popka2'),
			'/:popka2:/',
			'TexyHelper_popka2'
		);

		$texy->registerLinePattern(
			array('TexyHelper', 'weed'),
			'/:weed:/',
			'TexyHelper_weed'
		);

		$texy->registerLinePattern(
			array('TexyHelper', 'makak'),
			'/:makak:/',
			'TexyHelper_makak'
		);

		$texy->registerLinePattern(
			array('TexyHelper', 'doge'),
			'/:doge:/',
			'TexyHelper_doge'
		);
		
		$texy->registerLinePattern(
			array('TexyHelper', 'sheez'),
			'/:sheez:/',
			'TexyHelper_sheez'
		);

		$texy->registerLinePattern(
			array('TexyHelper', 'cheez'),
			'/:cheez:/',
			'TexyHelper_cheez'
		);

		$texy->registerLinePattern(
			array('TexyHelper', 'spice'),
			'/:spice:/',
			'TexyHelper_spice'
		);

		$texy->registerLinePattern(
			array('TexyHelper', 'hero'),
			'/:hero:/',
			'TexyHelper_hero'
		);

		$texy->registerLinePattern(
			array('TexyHelper', 'pauk'),
			'/:pauk:/',
			'TexyHelper_pauk'
		);

		$texy->registerLinePattern(
			array('TexyHelper', 'slon'),
			'/:slon:/',
			'TexyHelper_slon'
		);

		$texy->registerLinePattern(
			array('TexyHelper', 'yajka'),
			'/:yajka:/',
			'TexyHelper_yajka'
		);

		$texy->registerLinePattern(
			array('TexyHelper', 'deb'),
			'/:deb:/',
			'TexyHelper_deb'
		);

		$texy->registerLinePattern(
			array('TexyHelper', 'oru'),
			'/:oru:/',
			'TexyHelper_oru'
		);
		
		$texy->registerLinePattern(
			array('TexyHelper', 'cuni'),
			'/:cuni:/',
			'TexyHelper_cuni'
		);



		$texy->registerLinePattern(
			array('TexyHelper', 'spoiler'),
			'/%%(([^%]|%[^%])+)%%/',
			'TexyHelper_spoiler'
		);

		$texy->registerLinePattern(
			array('TexyHelper', 'speaker'),
			'/\#\%(([^\$]|\$[^\$])+)\%\#/',
			'TexyHelper_speaker'
		);
		
		$texy->registerLinePattern(
			array('TexyHelper', 'redline'),
			'/\#\@(([^\$]|\$[^\$])+)\@\#/',
			'TexyHelper_redline'
		);	

		if ($board == null)
		{
			$texy->registerLinePattern(
				array('TexyHelper', 'imgur'),
				'/\[:([a-zA-Z0-9]+):\]/',
				'TexyHelper_imgur'
			);
/*
			$texy->registerLinePattern(
				array('TexyHelper', 'youtube'),
				'/\[youtube:([^\]]+)\]/',
				'TexyHelper_youtube'
			);

			$texy->registerLinePattern(
				array('TexyHelper', 'images'),
				'/\[([^\]]+)\]/',
				'TexyHelper_images'
			);
*/

	        if ($post_link)
	        {
			    $texy->registerLinePattern(
				    array('TexyHelper', 'postlink'),
				    '/>>(\d+)/',
				    'TexyHelper_postlink'
			    );

			    $texy->registerLinePattern(
				    array('TexyHelper', 'boardpostlink2'),
				    '/>>([^\/]+)\/(\d+)/',
				    'boardlink'
			    );
	        }
		}
		else
		{
				$texy->registerLinePattern(
				    array('TexyHelper', 'boardpostlink'),
				    '/>>(\d+)/',
				    'boardlink_'. $board
			    );

			    $texy->registerLinePattern(
				    array('TexyHelper', 'boardpostlink2'),
				    '/>>([^\/]+)\/(\d+)/',
				    'boardlink'
			    );
		}

		return $texy;
	}

	/**
	 * Обработать строку (только типография):
	 */
	public static function typo($text)
	{
		$texy = self::createTexyObject();
		TexyConfigurator::safeMode($texy);
		TexyConfigurator::disableImages($texy);
		TexyConfigurator::disableLinks($texy);
		return $texy -> processTypo(htmlspecialchars($text));
	}

	/**
	 * Обработать строку (вся разметка):
	 */
	public static function markup($text, $safeMode = true, $links = true, $board = null)
	{
		$texy = self::createTexyObject($links, $board);

		if ($safeMode)
		{
			TexyConfigurator::safeMode($texy);
			TexyConfigurator::disableImages($texy);
		}
		return $texy -> process($text);
	}

    /**
	 * Вставка картинок:
	 
	static function images($parser, $matches, $name) {
		list(, $mContent) = $matches;

        if (preg_match(self::URL_REGEXP, $mContent))
        {
            if ($GLOBALS['post_image_count']++) {
		        $parser -> again = false;
                return '['. $mContent .']';
            }

            if (($u = PreviewHelper::upload($mContent)) !== false) {   
                $img = TexyHtml::el('img');
		        $img -> attrs['src']    = $u;
		        $img -> attrs['alt']    = '';

		        $link = TexyHtml::el('a');
		        $link -> attrs['target'] = '_blank';
		        $link -> attrs['class']  = 'b-image-link';
		        $link -> href($mContent);
		        $link -> add($img);

		        $parser -> again = false;

		        $GLOBALS['post_image_count'] = true;
		        return $link;
		    }
        }
        return '['. $mContent .']';
	}

	/**
	 * Imgur imagehost:
	 */
	static function imgur($parser, $matches, $name) {
		list(, $mContent, $mMod) = $matches;

        if ($GLOBALS['post_image_count']++) {
		    $parser -> again = false;
            return '[:'. $mContent .':]';
        }

		$img = TexyHtml::el('img');
		$img -> attrs['src']    = 'https://i.imgur.com/'.$mContent.'.jpg';
		$img -> attrs['alt']    = '';

		$link = TexyHtml::el('a');
		$link -> attrs['target'] = '_blank';
		$link -> attrs['class'] = 'b-image-link';
		$link -> href('https://imgur.com/'.$mContent.'');
		$link -> add($img);

		$parser -> again = false;
		return $link;
	}

	/**
	 * Спойлер:
	 */
	static function spoiler($parser, $matches, $name) {
		list(, $mContent, $mMod) = $matches;

		$spl = TexyHtml::el('span');
		$spl -> attrs['class'] = 'b-spoiler-text';
		$spl -> setText($mContent);

		$parser -> again = true;
		return $spl;
	}


	/**
	 * Красный:
	*/
	static function redline($parser, $matches, $name) {
		list(, $mContent, $mMod) = $matches;
		$spl = TexyHtml::el('span');
		$spl -> attrs['style'] = 'color:#f44336';
		$spl -> setText($mContent);
		$parser -> again = true;
		return $spl;
	}

	/**
	* Говорилка:
	*/
    	static function speaker($parser, $matches, $name) {
        list(, $mContent, $mMod) = $matches;
        $spl = TexyHtml::el('audio controls');
        $spl -> attrs['src'] = 'https://tts.voicetech.yandex.net/tts?text='.$mContent.'&lang=ru_RU&format=mp3&quality=hi&platform=web&application=translate&chunked=0&mock-ranges=1';
        $parser -> again = true;
        return $spl;
    }

	/**
	 * Троллфейс:
	 */
	static function trollface($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['src']    = '/img/trollface.gif';
		$el -> attrs['width']  = '30';
		$el -> attrs['height'] = '25';
		$el -> attrs['alt']    = '';

		$parser -> again = false;

		return $el;
	}

	/**
	 * FFUU smile
	 */
	static function ffuu($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['src']    = '/img/ffuu.png';
		$el -> attrs['width']  = '43';
		$el -> attrs['height'] = '31';
		$el -> attrs['alt']    = '';

		$parser -> again = false;

		return $el;
	}

	/**
	 * okay smile
	 */
	static function okay($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['src']    = '/img/okay.png';
		$el -> attrs['width']  = '26';
		$el -> attrs['height'] = '32';
		$el -> attrs['alt']    = '';

		$parser -> again = false;

		return $el;
	}

	/**
	 * omsk smile
	 */
	static function omsk($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['src']    = '/img/omsk.png';
		$el -> attrs['width']  = '17';
		$el -> attrs['height'] = '19';
		$el -> attrs['alt']    = '';

		$parser -> again = false;

		return $el;
	}


	/**
	 * nyan smile
	 */
	static function nyan($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['src']    = '/img/nyan.gif';
		$el -> attrs['width']  = '53';
		$el -> attrs['height'] = '21';
		$el -> attrs['alt']    = '';

		$parser -> again = false;

		return $el;
	}

	/**
	 * popka smile
	 */
	static function popka($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['src']    = '/img/popka.gif';
		$el -> attrs['width']  = '45';
		$el -> attrs['height'] = '35';
		$el -> attrs['alt']    = '';

		$parser -> again = false;

		return $el;
	}

	/**
	 * popka2 smile
	 */
	static function popka2($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['src']    = '/img/popka2.gif';
		$el -> attrs['width']  = '35';
		$el -> attrs['height'] = '25';
		$el -> attrs['alt']    = '';

		$parser -> again = false;

		return $el;
	}

	/**
	 * weed smile
	 */
	static function weed($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['src']    = '/img/weed.gif';
		$el -> attrs['width']  = '35';
		$el -> attrs['height'] = '35';
		$el -> attrs['alt']    = '';

		$parser -> again = false;

		return $el;
	}

	/**
	 * makak smile
	 */
	static function makak($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['src']    = '/img/makak.gif';
		$el -> attrs['width']  = '51';
		$el -> attrs['height'] = '37';
		$el -> attrs['alt']    = '';

		$parser -> again = false;

		return $el;
	}

	/**
	 * doge smile
	 */
	static function doge($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['src']    = '/img/doge.png';
		$el -> attrs['width']  = '33';
		$el -> attrs['height'] = '38';
		$el -> attrs['alt']    = '';

		$parser -> again = false;

		return $el;
	}

	/**
	 * sheez smile
	 */
	static function sheez($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['src']    = '/img/sheez.png';
		$el -> attrs['width']  = '40';
		$el -> attrs['height'] = '40';
		$el -> attrs['alt']    = '';

		$parser -> again = false;

		return $el;
	}

	/**
	 * cheez smile
	 */
	static function cheez($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['src']    = '/img/cheez.gif';
		$el -> attrs['width']  = '51';
		$el -> attrs['height'] = '40';
		$el -> attrs['alt']    = '';

		$parser -> again = false;

		return $el;
	}

	/**
	 * spice smile
	 */
	static function spice($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['src']    = '/img/spice.png';
		$el -> attrs['width']  = '40';
		$el -> attrs['height'] = '45';
		$el -> attrs['alt']    = '';

		$parser -> again = false;

		return $el;
	}

	/**
	 * hero smile
	 */
	static function hero($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['src']    = '/img/hero.png';
		$el -> attrs['width']  = '40';
		$el -> attrs['height'] = '45';
		$el -> attrs['alt']    = '';

		$parser -> again = false;

		return $el;
	}

	/**
	 * pauk smile
	 */
	static function pauk($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['src']    = '/img/pauk.gif';
		$el -> attrs['width']  = '37';
		$el -> attrs['height'] = '35';
		$el -> attrs['alt']    = '';

		$parser -> again = false;

		return $el;
	}

	/**
	 * slon smile
	 */
	static function slon($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['src']    = '/img/slon.gif';
		$el -> attrs['width']  = '33';
		$el -> attrs['height'] = '45';
		$el -> attrs['alt']    = '';

		$parser -> again = false;

		return $el;
	}

	/**
	 * yajka smile
	 */
	static function yajka($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['src']    = '/img/yajka.png';
		$el -> attrs['width']  = '18';
		$el -> attrs['height'] = '45';
		$el -> attrs['alt']    = '';

		$parser -> again = false;

		return $el;
	}

	/**
	 * deb smile
	 */
	static function deb($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['src']    = '/img/deb.png';
		$el -> attrs['width']  = '32';
		$el -> attrs['height'] = '32';
		$el -> attrs['alt']    = '';

		$parser -> again = false;

		return $el;
	}


	/**
	 * oru smile
	 */
	static function oru($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['src']    = '/img/oru.png';
		$el -> attrs['width']  = '43';
		$el -> attrs['height'] = '39';
		$el -> attrs['alt']    = '';

		$parser -> again = false;

		return $el;
	}


	/**
	 * cuni smile
	 */
	static function cuni($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['src']    = '/img/cuni.jpg';
		$el -> attrs['width']  = '40';
		$el -> attrs['height'] = '24';
		$el -> attrs['alt']    = '';

		$parser -> again = false;

		return $el;
	}



	/**
	 * awesome smile
	 */
	static function awesome($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['src']    = '/img/awesome.png';
		$el -> attrs['width']  = '20';
		$el -> attrs['height'] = '20';
		$el -> attrs['alt']    = '';

		$parser -> again = false;

		return $el;
	}

	/**
	 * rage smile
	 */
	static function rage($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['src']    = '/img/rage.png';
		$el -> attrs['width']  = '28';
		$el -> attrs['height'] = '30';
		$el -> attrs['alt']    = '';

		$parser -> again = false;

		return $el;
	}

	/**
	 * Собак:
	 */
	static function sobak($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['src']    = '/img/sobak.gif';
		$el -> attrs['width']  = '30';
		$el -> attrs['height'] = '24';
		$el -> attrs['alt']    = '';

		$parser -> again = false;

		return $el;
	}

	/**
	 * Десу:
	 */
	static function desu($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['src']    = '/img/desu.gif';
		$el -> attrs['width']  = '30';
		$el -> attrs['height'] = '42';
		$el -> attrs['alt']    = '';

		$parser -> again = false;

		return $el;
	}

	/**
	 * Кулфейс:
	 */
	static function coolface($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['src']    = '/img/coolface.gif';
		$el -> attrs['width']  = '30';
		$el -> attrs['height'] = '25';
		$el -> attrs['alt']    = '';

		$parser->again = false;

		return $el;
	}

	/**
	 * Ссылка на пост (комментарий):
	 */
	static function postlink($parser, $matches, $name)
	{
		list(, $id) = $matches;
		$parser -> again = false;

		if (Blog_BlogCommentsModel::CommentExists($id))
		{
			$comment = Blog_BlogCommentsModel::GetComment($id);
			$post_id = $comment['post_id'];
		}
		elseif (Blog_BlogPostsModel::PostExists($id))
			$post_id = $id;
		else
			return '&gt;&gt;'. $id;

		$link = TexyHtml::el('a');
		$link -> href($_SERVER["HTTP_X_FORWARDED_PROTO"] .'://'.$_SERVER["HTTP_HOST"] .'/news/res/'. $post_id .'/#'. $id );
		$link -> attrs['class'] = 'js-cross-link';
		$link -> attrs['name'] = 'news/'. $id;
		$link -> setText('&gt;&gt;'. $id);

		return $link;
	}

	/**
	 * Ссылка на пост борды:
	 */
	static function boardpostlink($parser, $matches, $name)
	{
		list(, $id) = $matches;
		$parser -> again = false;

		// Получаем название текущей борды:
		$board_name = substr($name, 10);
		$board = new Board_BoardModel($board_name);

		if ($board -> existsPost($id))
		{
			$post = $board -> getPost($id);
			$href = $_SERVER["HTTP_X_FORWARDED_PROTO"] .'://'.$_SERVER["HTTP_HOST"] .'/'. $board_name .'/res/';

			if ($post['parent_id'] == null)
				$href .= $id .'/#top';
			else
				$href .= $post['parent_id'] .'/#'. $id;

			$link = TexyHtml::el('a');
			$link -> href($href);
			$link -> attrs['class']  = 'js-cross-link';
			$link -> attrs['name'] = $board_name .'/'. $id;
			$link -> setText('&gt;&gt;'. $id);

			return $link;
		}

		return '&gt;&gt;'. $id;
	}

	static function boardpostlink2($parser, $matches, $name)
	{
		list(, $board_name, $id) = $matches;
		$parser -> again = false;

		if ($board_name != 'news')
		{
			$board = new Board_BoardModel($board_name);

			if ($board -> existsPost($id))
			{
				$post = $board -> getPost($id);
				$href = $_SERVER["HTTP_X_FORWARDED_PROTO"] .'://'.$_SERVER["HTTP_HOST"] .'/'. $board_name .'/res/';

				if ($post['parent_id'] == null)
					$href .= $id .'/#top';
				else
					$href .= $post['parent_id'] .'/#'. $id;

				$link = TexyHtml::el('a');
				$link -> href($href);
				$link -> attrs['class']  = 'js-cross-link';
				$link -> attrs['name'] = $board_name .'/'. $id;
				$link -> setText('&gt;&gt;'. $board_name .'/'. $id);

				return $link;
			}

			return '&gt;&gt;'. $board_name .'/'. $id;
		}

		if (Blog_BlogCommentsModel::CommentExists($id))
		{
			$comment = Blog_BlogCommentsModel::GetComment($id);
			$post_id = $comment['post_id'];
		}
		elseif (Blog_BlogPostsModel::PostExists($id))
			$post_id = $id;
		else
			'&gt;&gt;news/'. $id;

		$link = TexyHtml::el('a');
		$link -> href($_SERVER["HTTP_X_FORWARDED_PROTO"] .'://'.$_SERVER["HTTP_HOST"] .'/news/res/'. $post_id .'/#'. $id );
		$link -> attrs['class'] = 'js-cross-link';
		$link -> attrs['name'] = 'news/'. $id;
		$link -> setText('&gt;&gt;news/'. $id);

		return $link;
	}

	/**
	 * Получить код вставки видео:
	 */
	public static function getVideo($url)
	{
		if (preg_match('/^'.self::YOUTUBE_REGEXP.'/i', $url))
		{
			return preg_replace('/'.self::YOUTUBE_REGEXP.'(.*)/i', '<div class="b-video"><div class="g-hidden"><object width="520" height="400"><param name="wmode" value="opaque"></param><embed src="https://www.youtube.com/v/$1&hl=en" type="application/x-shockwave-flash" wmode="opaque" width="520" height="400"></embed></param></embed></object></div></div>', $url);
		}

		return false;
	}

    const URL_REGEXP = "{
			  ^
			  (
			    (https?)://[-\\w]+(\\.\\w[-\\w]*)+
			  |
			    (?i: [a-z0-9] (?:[-a-z0-9]*[a-z0-9])? \\. )+
			    (?-i: com\\b
			        | edu\\b
			        | biz\\b
			        | gov\\b
			        | in(?:t|fo)\\b # .int or .info
			        | mil\\b
			        | net\\b
			        | org\\b
			        | [a-z][a-z]\\.[a-z][a-z]\\b # two-letter country code
			    )
			  )
			  ( : \\d+ )?
			  (
			    /
			    [^.!,?;\"\\'<>()\[\]\{\}\s\x7F-\\xFF]*
			    (
			      [.!,?]+ [^.!,?;\"\\'<>()\\[\\]\{\\}\s\\x7F-\\xFF]+
			    )*
			  )?
			}ix";
}
