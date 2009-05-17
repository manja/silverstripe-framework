<?php
/**
 * A field that allows you to attach an image to a record from within a iframe - designed for use in AJAX forms where it
 * is not possible to use {@link SimpleImageField}.
 *
 * @package forms
 * @subpackage fields-files
 */
class ImageField extends FileIFrameField {
	
	/**
	 * @return SimpleImageField_Disabled
	 */
	public function performReadonlyTransformation() {
		return new SimpleImageField_Disabled($this->name, $this->title, $this->value, $this->form);
	}
	
	/**
	 * @return string
	 */
	public function FileTypeName() {
		return _t('ImageField.IMAGE', 'Image');
	}
	
}