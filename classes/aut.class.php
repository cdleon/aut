<?php
class Aut
{
	private static $_instance;

	private static $_opener_tag_form_1;
	private static $_title_form_1;
	private static $_input_1_form_1;
	private static $_submit_form_1;

	private static $_opener_tag_form_2;
	private static $_title_form_2;
	private static $_rtrn_url;
	private static $_input_1_form_2;
	private static $_input_2_form_2;
	private static $_input_3_form_2;
	private static $_input_4_form_2;
	private static $_input_5_form_2;
	private static $_input_6_form_2;
	private static $_input_7_form_2;
	private static $_input_8_form_2;
	private static $_input_9_form_2;
	private static $_input_10_form_2;
	private static $_input_11_form_2;
	private static $_input_12_form_2;
	private static $_submit_form_2;

	private static $_head_check=false;
	private static $_form_check=false;
	private static $_footer_check=false;
	public static function head($arg=true){
		if ($arg) {
			echo css();
		}
		self::$_head_check = true;
	}
	public static function form($rtrn_url=false){
		if (!$rtrn_url) {
			echo 'Aut Warning: Return url not specified.';
		}
		self::_builds($rtrn_url);
		echo self::_build_wrapper('start');
		echo self::_build_form_1();
		echo AUT_FORM_DIVISION;
		echo self::_build_form_2();
		echo self::_build_wrapper('end');
		self::$_form_check = true;
	}
	public static function footer(){
		echo js_footer();
		self::$_footer_check = true;
	}
	private static function _builds($rtrn_url){
		self::_build_opener_tags();
		self::_build_titles();
		self::_build_inputs($rtrn_url);
		self::_build_submits();
	}
	private static function _build_wrapper($arg){
		if ($arg=='start') {
			$wrapper = '<div';
			if (defined('AUT_TITLE_FORM_WRAPPER_CLASS')){$wrapper.=' class="'.AUT_TITLE_FORM_WRAPPER_CLASS.'"';}
			if (defined('AUT_TITLE_FORM_WRAPPER_ID')){$wrapper.=' id="'.AUT_TITLE_FORM_WRAPPER_ID.'"';}
			if (defined('AUT_TITLE_FORM_WRAPPER_STYLE')){$wrapper.=' style="'.AUT_TITLE_FORM_WRAPPER_STYLE.'"';}
			if (defined('AUT_TITLE_FORM_WRAPPER_OTHER')){$wrapper.=' '.AUT_TITLE_FORM_WRAPPER_OTHER.'"';}
			$wrapper.='>';
			return $wrapper;
		}elseif ($arg=='end') {
			$wrapper_close='</div>';
			return $wrapper_close;
		}
	}
	private static function _build_form_1(){
		$form_1=self::$_opener_tag_form_1;
		$form_1.=self::$_title_form_1;
		if (defined('AUT_ERROR_1')){$form_1.=AUT_ERROR_1;}
		$form_1.=self::$_input_1_form_1;
		$form_1.=self::$_submit_form_1;
		$form_1.='</form>';
		return $form_1;
	}
	private static function _build_form_2(){
		$form_2=self::$_opener_tag_form_2;
		$form_2.=self::$_title_form_2;
		if (defined('AUT_ERROR_2')){$form_2.=AUT_ERROR_2;}
		$form_2.=self::$_rtrn_url;
		$form_2.=self::$_input_1_form_2;
		$form_2.=self::$_input_2_form_2;
		$form_2.=self::$_input_3_form_2;
		$form_2.=self::$_input_4_form_2;
		$form_2.=self::$_input_5_form_2;
		$form_2.=self::$_input_6_form_2;
		$form_2.=self::$_input_7_form_2;
		$form_2.=self::$_input_8_form_2;
		$form_2.=self::$_input_9_form_2;
		$form_2.=self::$_input_10_form_2;
		$form_2.=self::$_input_11_form_2;
		$form_2.=self::$_input_12_form_2;
		$form_2.=self::$_submit_form_2;
		$form_2.='</form>';
		return $form_2;
	}
	private static function _build_opener_tags(){

		/* ======================================
		** Form 1 *******************************
		** ====================================== */

		$opener = '<form';
		//SET PROPERTIES DEFINED IN INI CONFIG FIlE
		if (defined('AUT_METHOD_1')){$opener.=' method="'.AUT_METHOD_1.'"';}
		if (defined('AUT_ACTION_1')){$opener.=' action="'.AUT_ACTION_1.'"';}
		if (defined('AUT_ID_1')){$opener.=' id="'.AUT_ID_1.'"';}
		if (defined('AUT_CLASS_1')){$opener.=' class="'.AUT_CLASS_1.'"';}
		if (defined('AUT_ACCEPT_CHARSET_1')){$opener.=' accept-charset="'.AUT_ACCEPT_CHARSET_1.'"';}
		if (defined('AUT_AUTOCOMPLETE_1')){$opener.=' autocomplete="'.AUT_AUTOCOMPLETE_1.'"';}
		if (defined('AUT_ENCTYPE_1')){$opener.=' enctype="'.AUT_ENCTYPE_1.'"';}
		if (defined('AUT_NAME_1')){$opener.=' name="'.AUT_NAME_1.'"';}
		if (defined('AUT_NOVALIDATE_1')){$opener.=' novalidate="'.AUT_NOVALIDATE_1.'"';}
		if (defined('AUT_TARGET_1')){$opener.=' target="'.AUT_TARGET_1.'"';}
		$opener.='>';
		//STORE TAG
		self::$_opener_tag_form_1 = $opener;

		/* ======================================
		** Form 2 *******************************
		** ====================================== */

		$opener = '<form';
		//SET PROPERTIES DEFINED IN INI CONFIG FIlE
		if (defined('AUT_METHOD_2')){$opener.=' method="'.AUT_METHOD_2.'"';}
		if (defined('AUT_ACTION_2')){$opener.=' action="'.AUT_ACTION_2.'"';}
		if (defined('AUT_ID_2')){$opener.=' id="'.AUT_ID_2.'"';}
		if (defined('AUT_CLASS_2')){$opener.=' class="'.AUT_CLASS_2.'"';}
		if (defined('AUT_ACCEPT_CHARSET_2')){$opener.=' accept-charset="'.AUT_ACCEPT_CHARSET_2.'"';}
		if (defined('AUT_AUTOCOMPLETE_2')){$opener.=' autocomplete="'.AUT_AUTOCOMPLETE_2.'"';}
		if (defined('AUT_ENCTYPE_2')){$opener.=' enctype="'.AUT_ENCTYPE_2.'"';}
		if (defined('AUT_NAME_2')){$opener.=' name="'.AUT_NAME_2.'"';}
		if (defined('AUT_NOVALIDATE_2')){$opener.=' novalidate="'.AUT_NOVALIDATE_2.'"';}
		if (defined('AUT_TARGET_2')){$opener.=' target="'.AUT_TARGET_2.'"';}
		$opener.='>';
		//STORE TAG
		self::$_opener_tag_form_2 = $opener;

	}
	private static function _build_titles(){

		/* ======================================
		** Form 1 *******************************
		** ====================================== */

		//BUILD TITLE
		$title='';
		if (defined('AUT_TITLE_FORM_1')) {
			if(defined('AUT_TITLE_FORM_1_TAG')){
				$title='<'.AUT_TITLE_FORM_1_TAG;
				if(defined('AUT_TITLE_FORM_1_CLASS')){$title.=' class="'.AUT_TITLE_FORM_1_CLASS.'"';}
				if(defined('AUT_TITLE_FORM_1_ID')){$title.=' id="'.AUT_TITLE_FORM_1_ID.'"';}
				if(defined('AUT_TITLE_FORM_1_STYLE')){$title.=' style="'.AUT_TITLE_FORM_1_STYLE.'"';}
				$title.='>'.AUT_TITLE_FORM_1;
				$title.='</'.AUT_TITLE_FORM_1_TAG.'>';
			}else{
				$title=AUT_TITLE_FORM_1;
			}
		}
		//STORE TITLE
		self::$_title_form_1 = $title;

		/* ======================================
		** Form 2 *******************************
		** ====================================== */

		//BUILD TITLE
		$title='';
		if (defined('AUT_TITLE_FORM_2')) {
			if(defined('AUT_TITLE_FORM_2_TAG')){
				$title='<'.AUT_TITLE_FORM_2_TAG;
				if(defined('AUT_TITLE_FORM_2_CLASS')){$title.=' class="'.AUT_TITLE_FORM_2_CLASS.'"';}
				if(defined('AUT_TITLE_FORM_2_ID')){$title.=' id="'.AUT_TITLE_FORM_2_ID.'"';}
				if(defined('AUT_TITLE_FORM_2_STYLE')){$title.=' style="'.AUT_TITLE_FORM_2_STYLE.'"';}
				$title.='>'.AUT_TITLE_FORM_2;
				$title.='</'.AUT_TITLE_FORM_2_TAG.'>';
			}else{
				$title=AUT_TITLE_FORM_2;
			}
		}
		//STORE TITLE
		self::$_title_form_2 = $title;
	}
	private static function _build_inputs($rtrn_url){

		/* ======================================
		** Form 1 *******************************
		** ====================================== */

		//BUILD URL INPUT
		$start='<div class="area">';
		$end='</div>';
		$label='';
		if(defined('AUT_FORM_1_INPUT_1_LABEL')){$label='<label for="url">'.AUT_FORM_1_INPUT_1_LABEL.'</label>';}
		$input='<input type="text"';
		if(defined('AUT_FORM_1_INPUT_1_ID')){$input.=' id="'.AUT_FORM_1_INPUT_1_ID.'"';}
		if(defined('AUT_FORM_1_INPUT_1_CLASS')){$input.=' class="'.AUT_FORM_1_INPUT_1_CLASS.'"';}
		if(defined('AUT_FORM_1_INPUT_1_NAME')){$input.=' name="'.AUT_FORM_1_INPUT_1_NAME.'"';}
		if(defined('AUT_FORM_1_INPUT_1_MAXLENGTH')){$input.=' maxlength="'.AUT_FORM_1_INPUT_1_MAXLENGTH.'"';}
		if(defined('AUT_FORM_1_INPUT_1_VALUE')){$input.=' value="'.AUT_FORM_1_INPUT_1_VALUE.'"';}
		if(defined('AUT_FORM_1_INPUT_1_STYLE')){$input.=' style="'.AUT_FORM_1_INPUT_1_STYLE.'"';}
		$input.=' />';
		//STORE INPUT
		self::$_input_1_form_1 = $start.$label.$input.$end;

		/* ======================================
		** Form 2 *******************************
		** ====================================== */
		//BUILD RETURN URL INPUT
		self::$_rtrn_url = '<input type="hidden" name="rtrn_url" value="'.$rtrn_url.'">';

		//BUILD TITLE INPUT
		$start='<div class="area">';
		$end='</div>';
		$label='';
		if(defined('AUT_FORM_2_INPUT_1_LABEL')){$label='<label for="title">'.AUT_FORM_2_INPUT_1_LABEL.'</label>';}
		$input='<input type="text"';
		if(defined('AUT_FORM_2_INPUT_1_ID')){$input.=' id="'.AUT_FORM_2_INPUT_1_ID.'"';}
		if(defined('AUT_FORM_2_INPUT_1_CLASS')){$input.=' class="'.AUT_FORM_2_INPUT_1_CLASS.'"';}
		if(defined('AUT_FORM_2_INPUT_1_NAME')){$input.=' name="'.AUT_FORM_2_INPUT_1_NAME.'"';}
		if(defined('AUT_FORM_2_INPUT_1_MAXLENGTH')){$input.=' maxlength="'.AUT_FORM_2_INPUT_1_MAXLENGTH.'"';}
		if(defined('ARTICLE_FETCHED_TITLE')){$input.=' value="'.ARTICLE_FETCHED_TITLE.'"';}
		if(defined('AUT_FORM_2_INPUT_1_STYLE')){$input.=' style="'.AUT_FORM_2_INPUT_1_STYLE.'"';}
		$input.=' />';
		//STORE INPUT
		self::$_input_1_form_2 = $start.$label.$input.$end;

		//BUILD URL INPUT
		$start='<div class="area">';
		$end='</div>';
		$label='';
		if(defined('AUT_FORM_2_INPUT_2_LABEL')){$label='<label for="url">'.AUT_FORM_2_INPUT_2_LABEL.'</label>';}
		//BUILD RESULT DISPLAY
		$input='<p';
		if(defined('AUT_FORM_2_INPUT_2_DISPLAY_ID')){$input.=' id="'.AUT_FORM_2_INPUT_2_DISPLAY_ID.'"';}
		if(defined('AUT_FORM_2_INPUT_2_DISPLAY_CLASS')){$input.=' class="'.AUT_FORM_2_INPUT_2_DISPLAY_CLASS.'"';}
		if(defined('AUT_FORM_2_INPUT_2_DISPLAY_STYLE')){$input.=' style="'.AUT_FORM_2_INPUT_2_DISPLAY_STYLE.'"';}
		$input.='>'.ARTICLE_FETCHED_URL.'</p>';
		$input.='<input type="hidden"';
		if(defined('AUT_FORM_2_INPUT_2_ID')){$input.=' id="'.AUT_FORM_2_INPUT_2_ID.'"';}
		if(defined('AUT_FORM_2_INPUT_2_CLASS')){$input.=' class="'.AUT_FORM_2_INPUT_2_CLASS.'"';}
		if(defined('AUT_FORM_2_INPUT_2_NAME')){$input.=' name="'.AUT_FORM_2_INPUT_2_NAME.'"';}
		if(defined('AUT_FORM_2_INPUT_2_MAXLENGTH')){$input.=' maxlength="'.AUT_FORM_2_INPUT_2_MAXLENGTH.'"';}
		$input.=' value="'.ARTICLE_FETCHED_URL.'"';
		$input.=' />';
		//STORE INPUT
		self::$_input_2_form_2 = $start.$label.$input.$end;

		//BUILD CLASIFICACION INPUT
		$start='<div class="area" id="divClasificacion">';
		$end='</div>';
		$label='';
		if(defined('AUT_FORM_2_INPUT_3_LABEL')){$label='<label for="clasificacion">'.AUT_FORM_2_INPUT_3_LABEL.'</label>';}
		$input='<select';
		if(defined('AUT_FORM_2_INPUT_3_ID')){$input.=' id="'.AUT_FORM_2_INPUT_3_ID.'"';}
		if(defined('AUT_FORM_2_INPUT_3_CLASS')){$input.=' class="'.AUT_FORM_2_INPUT_3_CLASS.'"';}
		if(defined('AUT_FORM_2_INPUT_3_NAME')){$input.=' name="'.AUT_FORM_2_INPUT_3_NAME.'"';}
		if(defined('AUT_FORM_2_INPUT_3_STYLE')){$input.=' style="'.AUT_FORM_2_INPUT_3_STYLE.'"';}
		$input.=' />';
		$input.='<option value=""></option><option value="Nacionales">Nacionales</option><option value="Internacionales">Internacionales</option>';
		$input.='</select>';
		//STORE INPUT
		self::$_input_3_form_2 = $start.$label.$input.$end;

		//BUILD REGION NACIONAL INPUT
		$start='<div class="area" id="nacionales">';
		$end='</div>';
		$label='';
		if(defined('AUT_FORM_2_INPUT_4_LABEL')){$label='<label for="region">'.AUT_FORM_2_INPUT_4_LABEL.'</label>';}
		$input='<select';
		if(defined('AUT_FORM_2_INPUT_4_ID')){$input.=' id="'.AUT_FORM_2_INPUT_4_ID.'"';}
		if(defined('AUT_FORM_2_INPUT_4_CLASS')){$input.=' class="'.AUT_FORM_2_INPUT_4_CLASS.'"';}
		if(defined('AUT_FORM_2_INPUT_4_NAME')){$input.=' name="'.AUT_FORM_2_INPUT_4_NAME.'"';}
		if(defined('AUT_FORM_2_INPUT_4_STYLE')){$input.=' style="'.AUT_FORM_2_INPUT_4_STYLE.'"';}
		$input.=' />';
		$input.=regionNacional();
		$input.='</select>';
		//STORE INPUT
		self::$_input_4_form_2 = $start.$label.$input.$end;

		//BUILD REGION INTERNACIONAL INPUT
		$start='<div class="area" id="internacionales">';
		$end='</div>';
		$label='';
		if(defined('AUT_FORM_2_INPUT_5_LABEL')){$label='<label for="region">'.AUT_FORM_2_INPUT_5_LABEL.'</label>';}
		$input='<select';
		if(defined('AUT_FORM_2_INPUT_5_ID')){$input.=' id="'.AUT_FORM_2_INPUT_5_ID.'"';}
		if(defined('AUT_FORM_2_INPUT_5_CLASS')){$input.=' class="'.AUT_FORM_2_INPUT_5_CLASS.'"';}
		if(defined('AUT_FORM_2_INPUT_5_NAME')){$input.=' name="'.AUT_FORM_2_INPUT_5_NAME.'"';}
		if(defined('AUT_FORM_2_INPUT_5_STYLE')){$input.=' style="'.AUT_FORM_2_INPUT_5_STYLE.'"';}
		$input.=' />';
		$input.=regionInternacional();
		$input.='</select>';
		//STORE INPUT
		self::$_input_5_form_2 = $start.$label.$input.$end;

		//BUILD CIUDAD INPUT
		$start='<div class="area">';
		$end='</div>';
		$label='';
		if(defined('AUT_FORM_2_INPUT_6_LABEL')){$label='<label for="ciudad">'.AUT_FORM_2_INPUT_6_LABEL.'</label>';}
		$input='<input type="text"';
		if(defined('AUT_FORM_2_INPUT_6_ID')){$input.=' id="'.AUT_FORM_2_INPUT_6_ID.'"';}
		if(defined('AUT_FORM_2_INPUT_6_CLASS')){$input.=' class="'.AUT_FORM_2_INPUT_6_CLASS.'"';}
		if(defined('AUT_FORM_2_INPUT_6_NAME')){$input.=' name="'.AUT_FORM_2_INPUT_6_NAME.'"';}
		if(defined('AUT_FORM_2_INPUT_6_MAXLENGTH')){$input.=' maxlength="'.AUT_FORM_2_INPUT_6_MAXLENGTH.'"';}
		if(defined('AUT_FORM_2_INPUT_6_STYLE')){$input.=' style="'.AUT_FORM_2_INPUT_6_STYLE.'"';}
		if(defined('AUT_FORM_2_INPUT_6_VALUE')){$input.=' value="'.AUT_FORM_2_INPUT_6_VALUE.'"';}
		$input.=' />';
		//STORE INPUT
		self::$_input_6_form_2 = $start.$label.$input.$end;

		//BUILD CATEGORIAS INPUT
		$start='<div class="area">';
		$end='</div>';
		$label='';
		if(defined('AUT_FORM_2_INPUT_7_LABEL')){$label='<label for="categoria">'.AUT_FORM_2_INPUT_7_LABEL.'</label>';}
		$input='<select';
		if(defined('AUT_FORM_2_INPUT_7_ID')){$input.=' id="'.AUT_FORM_2_INPUT_7_ID.'"';}
		if(defined('AUT_FORM_2_INPUT_7_CLASS')){$input.=' class="'.AUT_FORM_2_INPUT_7_CLASS.'"';}
		if(defined('AUT_FORM_2_INPUT_7_NAME')){$input.=' name="'.AUT_FORM_2_INPUT_7_NAME.'"';}
		if(defined('AUT_FORM_2_INPUT_7_STYLE')){$input.=' style="'.AUT_FORM_2_INPUT_7_STYLE.'"';}
		$input.=' />';
		$input.=categorias();
		$input.='</select>';
		//STORE INPUT
		self::$_input_7_form_2 = $start.$label.$input.$end;

		//BUILD SUBCATEGORIAS INPUT
		$start='<div class="area" id="subcategoria">';
		$end='</div>';
		//STORE INPUT
		self::$_input_8_form_2 = $start.$end;

		//BUILD FUENTE INPUT
		$start='<div class="area">';
		$end='</div>';
		$label='';
		if(defined('AUT_FORM_2_INPUT_9_LABEL')){$label='<label for="fuente">'.AUT_FORM_2_INPUT_9_LABEL.'</label>';}
		$input='<select';
		if(defined('AUT_FORM_2_INPUT_9_ID')){$input.=' id="'.AUT_FORM_2_INPUT_9_ID.'"';}
		if(defined('AUT_FORM_2_INPUT_9_CLASS')){$input.=' class="'.AUT_FORM_2_INPUT_9_CLASS.'"';}
		if(defined('AUT_FORM_2_INPUT_9_NAME')){$input.=' name="'.AUT_FORM_2_INPUT_9_NAME.'"';}
		if(defined('AUT_FORM_2_INPUT_9_STYLE')){$input.=' style="'.AUT_FORM_2_INPUT_9_STYLE.'"';}
		$input.=' />';
		$input.=fuente();
		$input.='</select>';
		//STORE INPUT
		self::$_input_9_form_2 = $start.$label.$input.$end;

		//BUILD OTRA FUENTE INPUT
		$start='<div class="area" id="divOtro">';
		$end='</div>';
		$label='';
		if(defined('AUT_FORM_2_INPUT_10_LABEL')){$label='<label for="otro">'.AUT_FORM_2_INPUT_10_LABEL.'</label>';}
		$input='<input type="text"';
		if(defined('AUT_FORM_2_INPUT_10_ID')){$input.=' id="'.AUT_FORM_2_INPUT_10_ID.'"';}
		if(defined('AUT_FORM_2_INPUT_10_CLASS')){$input.=' class="'.AUT_FORM_2_INPUT_10_CLASS.'"';}
		if(defined('AUT_FORM_2_INPUT_10_NAME')){$input.=' name="'.AUT_FORM_2_INPUT_10_NAME.'"';}
		if(defined('AUT_FORM_2_INPUT_10_MAXLENGTH')){$input.=' maxlength="'.AUT_FORM_2_INPUT_10_MAXLENGTH.'"';}
		if(defined('AUT_FORM_2_INPUT_10_STYLE')){$input.=' style="'.AUT_FORM_2_INPUT_10_STYLE.'"';}
		if(defined('AUT_FORM_2_INPUT_10_VALUE')){$input.=' value="'.AUT_FORM_2_INPUT_10_VALUE.'"';}
		$input.=' />';
		//STORE INPUT
		self::$_input_10_form_2 = $start.$label.$input.$end;

		//BUILD CHECKS SECTION INPUT
		$start='<div class="area">';
		$end='</div>';
						
		//check de acceso aca
		$input=AUT_FORM_2_INPUT_11_A_LABEL;
		$input.='<input type="checkbox"';
		if(defined('AUT_FORM_2_INPUT_11_A_ID')){$input.=' id="'.AUT_FORM_2_INPUT_11_A_ID.'"';}
		if(defined('AUT_FORM_2_INPUT_11_A_CLASS')){$input.=' class="'.AUT_FORM_2_INPUT_11_A_CLASS.'"';}
		if(defined('AUT_FORM_2_INPUT_11_A_NAME')){$input.=' name="'.AUT_FORM_2_INPUT_11_A_NAME.'"';}
		if(defined('AUT_FORM_2_INPUT_11_A_VALUE')){$input.=' value="'.AUT_FORM_2_INPUT_11_A_VALUE.'"';}
		$input.=' />';
		$input_a = $input;

		$input=AUT_FORM_2_INPUT_11_B_LABEL;
		$input.='<input type="checkbox"';
		if(defined('AUT_FORM_2_INPUT_11_B_ID')){$input.=' id="'.AUT_FORM_2_INPUT_11_B_ID.'"';}
		if(defined('AUT_FORM_2_INPUT_11_B_CLASS')){$input.=' class="'.AUT_FORM_2_INPUT_11_B_CLASS.'"';}
		if(defined('AUT_FORM_2_INPUT_11_B_NAME')){$input.=' name="'.AUT_FORM_2_INPUT_11_B_NAME.'"';}
		if(defined('AUT_FORM_2_INPUT_11_B_VALUE')){$input.=' value="'.AUT_FORM_2_INPUT_11_B_VALUE.'"';}
		$input.=' />';
		$input_b = $input;

		$input=AUT_FORM_2_INPUT_11_C_LABEL;
		$input.='<input type="checkbox"';
		if(defined('AUT_FORM_2_INPUT_11_C_ID')){$input.=' id="'.AUT_FORM_2_INPUT_11_C_ID.'"';}
		if(defined('AUT_FORM_2_INPUT_11_C_CLASS')){$input.=' class="'.AUT_FORM_2_INPUT_11_C_CLASS.'"';}
		if(defined('AUT_FORM_2_INPUT_11_C_NAME')){$input.=' name="'.AUT_FORM_2_INPUT_11_C_NAME.'"';}
		if(defined('AUT_FORM_2_INPUT_11_C_VALUE')){$input.=' value="'.AUT_FORM_2_INPUT_11_C_VALUE.'"';}
		$input.=' />';
		$input_c = $input;

		self::$_input_11_form_2 = $start.$input_a.$input_b.$input_c.$end;

		//BUILD IMAGEN INPUT
		$start='<div class="area">';
		$end='</div>';
		if(defined('ARTICLE_FETCHED_IMAGES')){$input=selectorimagenes(unserialize(ARTICLE_FETCHED_IMAGES));}
		//STORE INPUT
		self::$_input_12_form_2 = $start.$input.$end;
	}
	private static function _build_submits(){

		/* ======================================
		** Form 1 *******************************
		** ====================================== */

		//BUILD SUBMIT
		$start='<div>';
		$end='</div>';
		$submit='<input type="submit"';
		if(defined('AUT_FORM_1_SUBMIT_ID')){$submit.=' id="'.AUT_FORM_1_SUBMIT_ID.'"';}
		if(defined('AUT_FORM_1_SUBMIT_CLASS')){$submit.=' class="'.AUT_FORM_1_SUBMIT_CLASS.'"';}
		if(defined('AUT_FORM_1_SUBMIT_NAME')){$submit.=' name="'.AUT_FORM_1_SUBMIT_NAME.'"';}
		if(defined('AUT_FORM_1_SUBMIT_VALUE')){$submit.=' value="'.AUT_FORM_1_SUBMIT_VALUE.'"';}
		$submit.='>';
		//STORE SUBMIT
		self::$_submit_form_1 = $start.$submit.$end;

		/* ======================================
		** Form 2 *******************************
		** ====================================== */

		//BUILD SUBMIT
		$start='<div>';
		$end='</div>';
		$submit='<input type="submit"';
		if(defined('AUT_FORM_2_SUBMIT_ID')){$submit.=' id="'.AUT_FORM_2_SUBMIT_ID.'"';}
		if(defined('AUT_FORM_2_SUBMIT_CLASS')){$submit.=' class="'.AUT_FORM_2_SUBMIT_CLASS.'"';}
		if(defined('AUT_FORM_2_SUBMIT_NAME')){$submit.=' name="'.AUT_FORM_2_SUBMIT_NAME.'"';}
		if(defined('AUT_FORM_2_SUBMIT_VALUE')){$submit.=' value="'.AUT_FORM_2_SUBMIT_VALUE.'"';}
		$submit.='>';
		//STORE SUBMIT
		self::$_submit_form_2 = $start.$submit.$end;
	}
	function __destruct(){
		if(!self::$_head_check) {
			echo 'Aut Warning: Head function not called.<br>';
		}
		if(!self::$_form_check) {
			echo 'Aut Warning: Form function not called.<br>';
		}
		if(!self::$_footer_check) {
			echo 'Aut Warning: Footer function not called.<br>';
		}
		echo memory_get_usage().'<br>';
		echo memory_get_peak_usage().'<br>';
		echo memory_get_usage(true).'<br>';
		echo memory_get_peak_usage(true).'<br>';
	}
}
?>