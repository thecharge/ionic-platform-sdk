<?php

namespace Mirovit\IonicPlatformSDK\Response;


class ResponseMeta
{
    use Responder;

    /**
     * @var array
     */
    protected $response;

    public function __construct(array $response)
    {
        $this->response = $response;
    }

    /**
     * Whether the request returned a response
     * within 2xx range.
     *
     * @return bool
     */
    public function isSuccessful()
    {
        $status = (int)$this->get('status');
        return $status >= 200 && $status <= 299;
    }
}