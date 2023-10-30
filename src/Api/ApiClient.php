<?php

namespace Tapp\Airtable\Api;

interface ApiClient
{
    public function upsert(array $data, array $fieldsToMergeOn);

    public function get(string $id = null);

    public function post($contents = null, $massCreate = false);

    public function put(string $id, $contents = null);

    public function patch(string $id, $contents = null);

    public function delete(string $id);
}
