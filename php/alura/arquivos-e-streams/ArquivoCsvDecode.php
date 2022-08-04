<?php

class ArquivoCsvDecode extends php_user_filter
{
    public function onCreate(): bool
    {
        $this->stream = fopen('php://temp', 'w+');
        return $this->stream !== false;
    }

    public function filter($in, $out, &$consumed, bool $closing): int
    {
        $saida = '';
        while ($bucket = stream_bucket_make_writeable($in)) {
            $saida = utf8_decode($bucket->data);
        }

        $bucketSaida = stream_bucket_new($this->stream, $saida);
        stream_bucket_append($out, $bucketSaida);

        return PSFS_PASS_ON;
    }
}