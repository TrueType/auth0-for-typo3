<?php
declare(strict_types=1);
namespace Bitmotion\Auth0\Api\Management;

use Auth0\SDK\Exception\ApiException;
use Auth0\SDK\Exception\CoreException;
use Bitmotion\Auth0\Domain\Model\Auth0\Connection;
use GuzzleHttp\Psr7\Response;
use Symfony\Component\VarExporter\Exception\ClassNotFoundException;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class ConnectionApi extends GeneralManagementApi
{
    /**
     * Retrieves every connection matching the specified strategy. All connections are retrieved if no strategy is being
     * specified. Accepts a list of fields to include or exclude in the resulting list of connection objects.
     * Required scope: "read:connections"
     *
     *
     * @param string $strategy          Provide strategies to only retrieve connections with such strategies
     * @param string $fields            A comma separated list of fields to include or exclude (depending on include_fields)
     *                                  from the result, empty to retrieve all fields
     * @param string $name              Provide the name of the connection to retrieve
     * @param bool $includeFields       true if the fields specified are to be included in the result, false otherwise
     *                                  (defaults to true)
     * @param bool   $includeTotals     true if a query summary must be included in the result, false otherwise. Default false.
     * @param int    $page              The page number. Zero based
     * @param int    $perPage           The amount of entries per page. Default: no paging is used, all connections are returned
     *
     * @throws ApiException
     * @throws ClassNotFoundException
     * @throws CoreException
     * @return Connection|ObjectStorage
     * @see https://auth0.com/docs/api/management/v2#!/Connections/get_connections
     */
    public function getAll(
        string $strategy = '',
        string $fields = '',
        string $name = '',
        bool $includeFields = true,
        bool $includeTotals = false,
        int $page = 0,
        int $perPage = 0
    ) {
        $params = [];

        // Connection strategy to filter results by.
        if ($strategy !== '') {
            $params['strategy'] = $strategy;
        }

        // Results fields.
        if ($fields !== '') {
            $params['fields'] = $fields;
            $params['include_fields'] = $includeFields;
        }

        // Pagination.
        if ($page > 0) {
            $params['page'] = abs((int)$page);
            if ($perPage > 0) {
                $params['per_page'] = $perPage;
            }
        }

        if ($includeTotals === true) {
            $params['include_totals'] = (int)$includeTotals;
        }

        if ($name !== '') {
            $params['name'] = $name;
        }

        /** @var Response $response */
        $response = $this->apiClient
            ->method('get')
            ->addPath('connections')
            ->withDictParams($params)
            ->setReturnType('object')
            ->call();

        return $this->mapResponse($response);
    }

    /**
     * Retrieves a connection by its ID.
     * Required scope: "read:connections"
     *
     *
     * @param string $id            The id of the connection to retrieve
     * @param string $fields        A comma separated list of fields to include or exclude (depending on include_fields)
     *                              from the result, empty to retrieve all fields
     * @param bool $includeFields   true if the fields specified are to be included in the result, false otherwise
     *                              (defaults to true)
     *
     * @throws ApiException
     * @throws ClassNotFoundException
     * @throws CoreException
     * @return Connection
     * @see https://auth0.com/docs/api/management/v2#!/Connections/get_connections_by_id
     */
    public function get(string $id, string $fields = '', bool $includeFields = true)
    {
        $params = [];

        // Results fields.
        if ($fields !== '') {
            $params['fields'] = $fields;
            $params['include_fields'] = $includeFields;
        }

        $response = $this->apiClient
            ->method('get')
            ->addPath('connections', $id)
            ->withDictParams($params)
            ->setReturnType('object')
            ->call();

        return $this->mapResponse($response);
    }

    /**
     * Deletes a connection and all its users.
     * Required scope: "delete:connections"
     *
     * @param string $id    Connection ID to delete
     *
     * @throws ApiException
     * @throws ClassNotFoundException
     * @throws CoreException
     * @return object|ObjectStorage
     * @see https://auth0.com/docs/api/management/v2#!/Connections/delete_connections_by_id
     */
    public function delete(string $id)
    {
        $response = $this->apiClient
            ->method('delete')
            ->addPath('connections', $id)
            ->setReturnType('object')
            ->call();

        return $this->mapResponse($response);
    }

    /**
     * Deletes a specified connection user by its email (you cannot delete all users from specific connection).
     * Currently, only Database Connections are supported.
     * Required scope: "delete:users"
     *
     *
     * @param string $id    The id of the connection (currently only database connections are supported)
     * @param string $email The email of the user to delete
     *
     * @throws ApiException
     * @throws ClassNotFoundException
     * @throws CoreException
     * @return object|ObjectStorage
     * @see https://auth0.com/docs/api/management/v2#!/Connections/delete_users_by_email
     */
    public function deleteUser(string $id, string $email)
    {
        $response = $this->apiClient
            ->method('delete')
            ->addPath('connections', $id)
            ->addPath('users')
            ->withParam('email', $email)
            ->setReturnType('object')
            ->call();

        return $this->mapResponse($response);
    }

    /**
     * Creates a new connection according to the JSON object received in body.
     * Required scope: "create:connections"
     *
     * @param string $name           The name of the connection. Must start and end with an alphanumeric character and can only
     *                               contain alphanumeric characters and '-'. Max length 128
     * @param string $strategy       The identity provider identifier for the connection
     * @param array $enabledClients  The identifiers of the clients for which the connection is to be enabled. If the array is
     *                               empty or the property is not specified, no clients are enabled
     * @param array $realms          Defines the realms for which the connection will be used (ie: email domains). If the array
     *                               is empty or the property is not specified, the connection name will be added as realm
     *
     * @throws ApiException
     * @throws ClassNotFoundException
     * @throws CoreException
     * @return object|ObjectStorage
     * @see https://auth0.com/docs/api/management/v2#!/Connections/post_connections
     */
    public function create(
        string $name,
        string $strategy,
        array $options = [],
        array $enabledClients = [],
        array $realms = [],
        array $metadata = []
    ) {
        $body = [
            'name' => $name,
            // TODO: validate $strategy
            'strategy' => $strategy,
        ];

        if (!empty($options)) {
            // TODO: validate $options
            $body['options'] = $options;
        }

        if (!empty($enabledClients)) {
            $body['enabled_clients'] = $enabledClients;
        }

        if (!empty($realms)) {
            $body['realms'] = $realms;
        }

        if (!empty($metadata)) {
            $body['metadata'] = $metadata;
        }

        $response = $this->apiClient
            ->method('post')
            ->addPath('connections')
            ->withBody(\GuzzleHttp\json_encode($body))
            ->setReturnType('object')
            ->call();

        return $this->mapResponse($response);
    }

    /**
     * Updates a connection. if you use the options parameter, the whole options object will be overridden, so ensure that
     * all parameters are present
     * Required scope: "update:connections"
     *
     * @param string $id             The id of the connection to retrieve
     * @param array $enabledClients The identifiers of the clients for which the connection is to be enabled. If the array is
     *                              empty or the property is not specified, no clients are enabled
     * @param array $realms         Defines the realms for which the connection will be used (ie: email domains). If the array
     *                              is empty or the property is not specified, the connection name will be added as realm
     *
     * @throws ApiException
     * @throws ClassNotFoundException
     * @throws CoreException
     * @return object|ObjectStorage
     * @see https://auth0.com/docs/api/management/v2#!/Connections/patch_connections_by_id
     */
    public function update(
        string $id,
        array $options = [],
        array $enabledClients = [],
        array $realms = [],
        array $metadata = []
    ) {
        $body = [];

        if (!empty($options)) {
            // TODO: validate $options
            $body['options'] = $options;
        }

        if (!empty($enabledClients)) {
            $body['enabled_clients'] = $enabledClients;
        }

        if (!empty($realms)) {
            $body['realms'] = $realms;
        }

        if (!empty($metadata)) {
            $body['metadata'] = $metadata;
        }

        $response = $this->apiClient
            ->method('patch')
            ->addPath('connections', $id)
            ->withBody(\GuzzleHttp\json_encode($body))
            ->setReturnType('object')
            ->call();

        return $this->mapResponse($response);
    }
}
