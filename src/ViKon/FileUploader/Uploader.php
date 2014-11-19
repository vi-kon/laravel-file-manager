<?php
/**
 * Created by PhpStorm.
 * User: van Gogh
 * Date: 2014.11.19.
 * Time: 20:33
 */

namespace ViKon\FileUploader;

class Uploader
{
    private $options = [];

    public function __construct()
    {
        $this->options = [
            'dataType' => 'json',
        ];
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
     * @param string|null $template
     *
     * @return \Illuminate\View\View
     */
    public function render($template = null)
    {
        return view($template === null ? config('file-uploader::template')
                        : $template)->with('options', $this->options);
    }
}