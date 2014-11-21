<?php

namespace ViKon\FileManager;

class Uploader
{
    /** @var string */
    private $id;

    /** @var mixed[] */
    private $options = [];

    public function __construct()
    {
        $this->id      = config('file-manager::id');
        $this->options = [
            'dataType' => 'json',
        ];
    }

    /**
     * Set field id
     *
     * @param string $id
     *
     * @return $this
     */
    public function id($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set file uploader url
     *
     * @param string $url
     *
     * @return $this
     */
    public function url($url)
    {
        $this->options['url'] = $url;

        return $this;
    }

    /**
     * Set image auto upload
     *
     * @param bool $on
     *
     * @return $this
     */
    public function autoUpload($on = true)
    {
        $this->options['autoUpload'] = $on;

        return $this;
    }

    /**
     * Set maximum allowed file size.
     *
     * @param int $size
     *
     * @return $this
     */
    public function maxFileSize($size)
    {
        $this->options['maxFileSize'] = $size;

        return $this;
    }

    /**
     * Set this option to true to issue all file upload requests in a sequential order instead of simultaneous requests.
     *
     * @param bool $on
     *
     * @return $this
     */
    public function sequentialUploads($on = true)
    {
        $this->options['sequentialUploads'] = $on;

        return $this;
    }

    /**
     * To limit the number of concurrent uploads, set this option to an integer value greater than 0.
     *
     * @param int $limit
     *
     * @return $this
     */
    public function limitConcurrentUploads($limit)
    {
        $this->options['limitConcurrentUploads'] = $limit;

        return $this;
    }

    /**
     * Render content
     *
     * @param string|null $template
     *
     * @return \Illuminate\View\View
     */
    public function render($template = null)
    {
        return view($template === null ? config('file-manager::template') : $template)
            ->with('id', $this->id)
            ->with('options', $this->options);
    }
}