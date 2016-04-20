<?php

if ( ! class_exists( 'GFForms' ) ) {
	die();
}

class GF_Field_Poll extends GF_Field {

	public $type = 'poll';

	// # FORM EDITOR & FIELD MARKUP -------------------------------------------------------------------------------------

	/**
	 * Return the field title, for use in the form editor.
	 *
	 * @return string
	 */
	public function get_form_editor_field_title() {
		return esc_attr__( 'Poll', 'gravityformspolls' );
	}

	/**
	 * Assign the Poll button to the Advanced Fields group.
	 *
	 * @return array
	 */
	public function get_form_editor_button() {
		return array(
			'group' => 'advanced_fields',
			'text'  => $this->get_form_editor_field_title()
		);
	}

	/**
	 * Return the settings which should be available on the field in the form editor.
	 *
	 * @return array
	 */
	function get_form_editor_field_settings() {
		return array(
			'poll_field_type_setting',
			'poll_question_setting',
			'randomize_choices_setting',
		);
	}

}

GF_Fields::register( new GF_Field_Poll() );