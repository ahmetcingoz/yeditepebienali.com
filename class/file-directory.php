<?php

	function _file_get_contents ($file) {

		$file = file_get_contents($file);

		return $file;

	}

	function _directory_name ($path) {

		$directory = glob($path . '/*', GLOB_ONLYDIR);

		return $directory;

	}

	function _filename ($path, $type = null) {

		if (!empty($type)) {

			$name = pathinfo($path);

			$filename =  basename($path, '.' . $name['extension']);

			return $filename;

		} else {

			$basename = basename($path);

			return $basename;

		}

	}	

	function _content ($directory, $supported_file = null) {

		if (!isset($supported_file)) {

			$files = glob($directory . '*.*');

		} else {

			$files = glob($directory . '*.' . $supported_file);

		}

		if (count($files) <> 0) {

			return $files;

		}

	}

	function _decode_json ($file) {

		$content = _file_get_contents ($file);

		$array = json_decode($content, true);

		return $array;

	}

?>