<?php

function symbols_letter($arg){
	switch ($arg){
		case 'й':case 'Й':
			$arr_symbol[] = "─██";
			$arr_symbol[] = "█──█";
			$arr_symbol[] = "█──█";
			$arr_symbol[] = "█─██";
			$arr_symbol[] = "██─█";
			$arr_symbol[] = "█──█";
			break;
		case 'ц':case 'Ц':
			$arr_symbol[] = "█──█";
			$arr_symbol[] = "█──█";
			$arr_symbol[] = "█──█";
			$arr_symbol[] = "█──█";
			$arr_symbol[] = "█████";
			break;
		case 'у':case 'У':
			$arr_symbol[] = "█─█";
			$arr_symbol[] = "█─█";
			$arr_symbol[] = "███";
			$arr_symbol[] = "──█";
			$arr_symbol[] = "███";
			break;
		case 'к':case 'К':
			$arr_symbol[] = "█──█";
			$arr_symbol[] = "█─█";
			$arr_symbol[] = "██";
			$arr_symbol[] = "█─█";
			$arr_symbol[] = "█──█";
			break;
		case 'е':case 'Е':
			$arr_symbol[] = "███";
			$arr_symbol[] = "█";
			$arr_symbol[] = "███";
			$arr_symbol[] = "█";
			$arr_symbol[] = "███";
			break;
		case 'н':case 'Н':
			$arr_symbol[] = "█──█";
			$arr_symbol[] = "█──█";
			$arr_symbol[] = "████";
			$arr_symbol[] = "█──█";
			$arr_symbol[] = "█──█";
			break;
		case 'г':case 'Г':
			$arr_symbol[] = "███";
			$arr_symbol[] = "█";
			$arr_symbol[] = "█";
			$arr_symbol[] = "█";
			$arr_symbol[] = "█";
			break;
		case 'ш':case 'Ш':
			$arr_symbol[] = "█───█";
			$arr_symbol[] = "█───█";
			$arr_symbol[] = "█─█─█";
			$arr_symbol[] = "█─█─█";
			$arr_symbol[] = "█████";
			break;
		case 'щ':case 'Щ':
			$arr_symbol[] = "█───█";
			$arr_symbol[] = "█───█";
			$arr_symbol[] = "█─█─█";
			$arr_symbol[] = "█─█─█";
			$arr_symbol[] = "██████";
			break;
		case 'з':case 'З':
			$arr_symbol[] = "███";
			$arr_symbol[] = "──█";
			$arr_symbol[] = "███";
			$arr_symbol[] = "──█";
			$arr_symbol[] = "███";
			break;
		case 'х':case 'Х':
			$arr_symbol[] = "██─██";
			$arr_symbol[] = "─███";
			$arr_symbol[] = "──█";
			$arr_symbol[] = "─███";
			$arr_symbol[] = "██─██";
			break;
		case 'ъ':case 'Ъ':
			$arr_symbol[] = "██";
			$arr_symbol[] = "─█";
			$arr_symbol[] = "─████";
			$arr_symbol[] = "─█──█";
			$arr_symbol[] = "─████";
			break;
		case 'ф':case 'Ф':
			$arr_symbol[] = "█████";
			$arr_symbol[] = "█─█─█";
			$arr_symbol[] = "█─█─█";
			$arr_symbol[] = "█████";
			$arr_symbol[] = "──█";
			break;
		case 'ы':case 'Ы':
			$arr_symbol[] = "█───█";
			$arr_symbol[] = "█───█";
			$arr_symbol[] = "███─█";
			$arr_symbol[] = "█─█─█";
			$arr_symbol[] = "███─█";
			break;
		case 'в':case 'В':
			$arr_symbol[] = "████";
			$arr_symbol[] = "█──██";
			$arr_symbol[] = "████";
			$arr_symbol[] = "█──██";
			$arr_symbol[] = "████";
			break;
		case 'а':case 'А':
			$arr_symbol[] = "████";
			$arr_symbol[] = "█──█";
			$arr_symbol[] = "████";
			$arr_symbol[] = "█──█";
			$arr_symbol[] = "█──█";
			break;
		case 'п':case 'П':
			$arr_symbol[] = "████";
			$arr_symbol[] = "█──█";
			$arr_symbol[] = "█──█";
			$arr_symbol[] = "█──█";
			$arr_symbol[] = "█──█";
			break;
		case 'р':case 'Р':
			$arr_symbol[] = "████";
			$arr_symbol[] = "█──█";
			$arr_symbol[] = "████";
			$arr_symbol[] = "█";
			$arr_symbol[] = "█";
			break;
		case 'о':case 'О':
			$arr_symbol[] = "████";
			$arr_symbol[] = "█──█";
			$arr_symbol[] = "█──█";
			$arr_symbol[] = "█──█";
			$arr_symbol[] = "████";
			break;
		case 'л':case 'Л':
			$arr_symbol[] = "──██";
			$arr_symbol[] = "─█─█";
			$arr_symbol[] = "█──█";
			$arr_symbol[] = "█──█";
			$arr_symbol[] = "█──█";
			break;
		case 'д':case 'Д':
			$arr_symbol[] = "─███";
			$arr_symbol[] = "─█─█";
			$arr_symbol[] = "─█─█";
			$arr_symbol[] = "█████";
			$arr_symbol[] = "█───█";
			break;
		case 'ж':case 'Ж':
			$arr_symbol[] = "█─█─█";
			$arr_symbol[] = "█████";
			$arr_symbol[] = "─███";
			$arr_symbol[] = "█████";
			$arr_symbol[] = "█─█─█";
			break;
		case 'э':case 'Э':
			$arr_symbol[] = "████";
			$arr_symbol[] = "█──█";
			$arr_symbol[] = "──██";
			$arr_symbol[] = "█──█";
			$arr_symbol[] = "████";
			break;
		case 'я':case 'Я':
			$arr_symbol[] = "████";
			$arr_symbol[] = "█──█";
			$arr_symbol[] = "████";
			$arr_symbol[] = "─█─█";
			$arr_symbol[] = "─█─█";
			break;
		case 'ч':case 'Ч':
			$arr_symbol[] = "█──█";
			$arr_symbol[] = "█──█";
			$arr_symbol[] = "████";
			$arr_symbol[] = "───█";
			$arr_symbol[] = "───█";
			break;
		case 'с':case 'С':
			$arr_symbol[] = "████";
			$arr_symbol[] = "█──█";
			$arr_symbol[] = "█";
			$arr_symbol[] = "█──█";
			$arr_symbol[] = "████";
			break;
		case 'м':case 'М':
			$arr_symbol[] = "█───█";
			$arr_symbol[] = "██─██";
			$arr_symbol[] = "█─█─█";
			$arr_symbol[] = "█───█";
			$arr_symbol[] = "█───█";
			break;
		case 'и':case 'И':
			$arr_symbol[] = "█──█";
			$arr_symbol[] = "█──█";
			$arr_symbol[] = "█─██";
			$arr_symbol[] = "██─█";
			$arr_symbol[] = "█──█";
			break;
		case 'т':case 'Т':
			$arr_symbol[] = "███";
			$arr_symbol[] = "─█";
			$arr_symbol[] = "─█";
			$arr_symbol[] = "─█";
			$arr_symbol[] = "─█";
			break;
		case 'ь':case 'Ь':
			$arr_symbol[] = "█";
			$arr_symbol[] = "█";
			$arr_symbol[] = "████";
			$arr_symbol[] = "█──█";
			$arr_symbol[] = "████";
			break;
		case 'б':case 'Б':
			$arr_symbol[] = "████";
			$arr_symbol[] = "█";
			$arr_symbol[] = "████";
			$arr_symbol[] = "█──█";
			$arr_symbol[] = "████";
			break;
		case 'ю':case 'Ю':
			$arr_symbol[] = "█──██";
			$arr_symbol[] = "█─█──█";
			$arr_symbol[] = "████─█";
			$arr_symbol[] = "█─█──█";
			$arr_symbol[] = "█──██";
			break;
		case 'ё':case 'Ё':
			$arr_symbol[] = "█─█";
			$arr_symbol[] = "███";
			$arr_symbol[] = "█";
			$arr_symbol[] = "███";
			$arr_symbol[] = "█";
			$arr_symbol[] = "███";
			break;
		case ',':
			$arr_symbol[] = " ";
			$arr_symbol[] = " ";
			$arr_symbol[] = " ";
			$arr_symbol[] = " ";
			$arr_symbol[] = "█";
			$arr_symbol[] = "█";
			break;
		case '.':
			$arr_symbol[] = " ";
			$arr_symbol[] = " ";
			$arr_symbol[] = " ";
			$arr_symbol[] = " ";
			$arr_symbol[] = "█";
			break;
		case '?':
			$arr_symbol[] = "███";
			$arr_symbol[] = "──█";
			$arr_symbol[] = "███";
			$arr_symbol[] = " ";
			$arr_symbol[] = "█";
			break;
		case '!':
			$arr_symbol[] = "█";
			$arr_symbol[] = "█";
			$arr_symbol[] = "█";
			$arr_symbol[] = " ";
			$arr_symbol[] = "█";
			break;
		default:
			$arr_symbol[] = html_entity_decode("&nbsp;&nbsp;");
			$arr_symbol[] = html_entity_decode("&nbsp;&nbsp;");
			$arr_symbol[] = html_entity_decode("&nbsp;&nbsp;");
			$arr_symbol[] = html_entity_decode("&nbsp;&nbsp;");
			$arr_symbol[] = html_entity_decode("&nbsp;&nbsp;");
			$arr_symbol[] = html_entity_decode("&nbsp;&nbsp;");
			break;
	}

	return $arr_symbol;
}