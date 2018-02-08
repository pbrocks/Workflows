<?php
/**
 * UI class
 *
 * The UI class is for defining a set of fields and storing and retrieving the values of which are passed to the destination objects,
 * recipient and event handlers.
 *
 * @link https://github.com/humanmade/Workflow/issues/4
 *
 * @package HM\Workflow
 * @since 0.1.0
 */

namespace HM\Workflow;

/**
 * Class UI
 */
class UI {
	/**
	 * @var
	 */
	protected $name;

	/**
	 * @var
	 */
	protected $fields = [];

	/**
	 * @var
	 */
	protected $description;

	/**
	 * @var
	 */
	protected $key;

	/**
	 * @var
	 */
	protected static $instances = [];

	/**
	 * UI constructor.
	 *
	 * @param string $name
	 */
	public function __construct( $name ) {
		$this->name = $name;
		$this->set_key( sanitize_key( $name ) );
	}

	/**
	 * This method should set the value of $this->key
	 *
	 * @param string $key An identifier for the UI to store & fetch data against.
	 *
	 * @return $this
	 */
	public function set_key( $key ) {
		$this->key = $key;

		return $this;
	}

	/**
	 * This method should set the value of $this->description
	 *
	 * @param string $description  A description of the UI, this should be text to help the user understand the interface.
	 *
	 * @return $this
	 */
	public function set_description( $description ) {
		$this->description = $description;

		return $this;
	}

	/**
	 * This method will create an array from the passed parameters.
	 *
	 * @param string $name   The identifier used in the name attribute, will be passed through sanitize_key().
	 * @param string $label  The user facing text label.
	 * @param string $type   The field type.
	 * @param array  $params An optional array of custom parameters to configure fields other than text type.
	 *
	 * @return $this
	 */
	public function add_field( $name, $label, $type = 'text', array $params = array() ) {
		$this->fields[] = [
			'name'   => $name,
			'label'  => $label,
			'type'   => $type,
			'params' => $params,
			'value'  => $this->get_data(),
		];

		return $this;
	}

	/**
	 * This method should save the data using the key value, this might be implemented in options or post meta.
	 *
	 * @param array $data An array of the field values with the field names as the keys.
	 */
	public function save_data( $data ) {
		// @todo: handle this
	}

	/**
	 * Returns the keyed array of data associated with this UI.
	 *
	 * @return array
	 */
	public function get_data() {
		// @todo: handle this
	}

	/**
	 * A configuration object ready for JSON encoding or parsing in PHP to build the form fields.
	 *
	 * @return array
	 */
	public function get_config() {
		// @todo: handle this
	}
}
