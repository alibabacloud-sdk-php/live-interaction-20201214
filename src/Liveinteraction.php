<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\AddGroupMembersRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\AddGroupMembersResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\AddGroupMembersShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\AddGroupSilenceBlacklistRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\AddGroupSilenceBlacklistResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\AddGroupSilenceBlacklistShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\AddGroupSilenceWhitelistRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\AddGroupSilenceWhitelistResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\AddGroupSilenceWhitelistShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\BindInterconnectionCidRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\BindInterconnectionCidResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\BindInterconnectionCidShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\BindInterconnectionUidRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\BindInterconnectionUidResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\BindInterconnectionUidShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\CancelSilenceAllGroupMembersRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\CancelSilenceAllGroupMembersResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\CancelSilenceAllGroupMembersShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\CreateGroupRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\CreateGroupResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\CreateGroupShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\CreateRoomRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\CreateRoomResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\DeleteAppRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\DeleteAppResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\DestroyRoomRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\DestroyRoomResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\DismissGroupRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\DismissGroupResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\DismissGroupShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetCommonConfigRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetCommonConfigResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetGroupByIdRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetGroupByIdResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetGroupByIdShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetGroupMemberByIdsRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetGroupMemberByIdsResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetGroupMemberByIdsShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetIMConfigRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetIMConfigResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetLoginTokenRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetLoginTokenResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetLoginTokenShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetMediaUploadUrlRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetMediaUploadUrlResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetMediaUploadUrlShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetMediaUrlRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetMediaUrlResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetMediaUrlShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetMessageByIdRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetMessageByIdResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetMessageByIdShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetRoomStatisticsRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetRoomStatisticsResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetUserMuteSettingRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetUserMuteSettingResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetUserMuteSettingShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportGroupChatConversationRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportGroupChatConversationResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportGroupChatConversationShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportGroupChatMemberRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportGroupChatMemberResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportGroupChatMemberShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportMessageRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportMessageResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportMessageShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportSingleConversationRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportSingleConversationResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportSingleConversationShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\InitTenantRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\InitTenantResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\KickOffRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\KickOffResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\KickOffShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListAppInfosRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListAppInfosResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListAppInfosShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListCallbackApiIdsResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListDetailReportStatisticsRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListDetailReportStatisticsResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListDetailReportStatisticsShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListGroupAllMembersRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListGroupAllMembersResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListGroupAllMembersShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListGroupSilenceMembersRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListGroupSilenceMembersResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListGroupSilenceMembersShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListRoomMessagesRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListRoomMessagesResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListRoomUsersRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListRoomUsersResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\MuteUsersRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\MuteUsersResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\MuteUsersShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\QueryInterconnectionCidMappingRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\QueryInterconnectionCidMappingResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\QueryInterconnectionCidMappingShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RecallMessageRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RecallMessageResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RecallMessageShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveGroupExtensionByKeysRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveGroupExtensionByKeysResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveGroupExtensionByKeysShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveGroupMemberExtensionByKeysRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveGroupMemberExtensionByKeysResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveGroupMemberExtensionByKeysShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveGroupMembersRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveGroupMembersResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveGroupMembersShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveGroupSilenceBlacklistRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveGroupSilenceBlacklistResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveGroupSilenceBlacklistShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveGroupSilenceWhitelistRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveGroupSilenceWhitelistResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveGroupSilenceWhitelistShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveMessageExtensionByKeysRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveMessageExtensionByKeysResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveMessageExtensionByKeysShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveSingleChatExtensionByKeysRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveSingleChatExtensionByKeysResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveSingleChatExtensionByKeysShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveUserConversationExtensionByKeysRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveUserConversationExtensionByKeysResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveUserConversationExtensionByKeysShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SendCustomMessageRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SendCustomMessageResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SendCustomMessageToRoomUsersRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SendCustomMessageToRoomUsersResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SendMessageRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SendMessageResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SendMessageShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetGroupExtensionByKeysRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetGroupExtensionByKeysResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetGroupExtensionByKeysShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetGroupMemberExtensionByKeysRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetGroupMemberExtensionByKeysResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetGroupMemberExtensionByKeysShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetGroupOwnerRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetGroupOwnerResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetGroupOwnerShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetMessageExtensionByKeysRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetMessageExtensionByKeysResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetMessageExtensionByKeysShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetMessageReadRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetMessageReadResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetMessageReadShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetSingleChatExtensionByKeysRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetSingleChatExtensionByKeysResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetSingleChatExtensionByKeysShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetUserConversationExtensionByKeysRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetUserConversationExtensionByKeysResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetUserConversationExtensionByKeysShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SilenceAllGroupMembersRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SilenceAllGroupMembersResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SilenceAllGroupMembersShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UnbindInterconnectionUidRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UnbindInterconnectionUidResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UnbindInterconnectionUidShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateAppNameRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateAppNameResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateAppNameShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateAppStatusRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateAppStatusResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateAppStatusShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateCallbackConfigRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateCallbackConfigResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateCallbackConfigShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateGroupIconRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateGroupIconResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateGroupIconShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateGroupMembersRoleRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateGroupMembersRoleResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateGroupMembersRoleShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateGroupTitleRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateGroupTitleResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateGroupTitleShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateMsgRecallIntervalRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateMsgRecallIntervalResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateMsgRecallIntervalShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateTenantStatusRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateTenantStatusResponse;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Liveinteraction extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('live-interaction', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param AddGroupMembersRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return AddGroupMembersResponse
     */
    public function addGroupMembersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddGroupMembersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddGroupMembers',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddGroupMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddGroupMembersRequest $request
     *
     * @return AddGroupMembersResponse
     */
    public function addGroupMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGroupMembersWithOptions($request, $runtime);
    }

    /**
     * @param AddGroupSilenceBlacklistRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return AddGroupSilenceBlacklistResponse
     */
    public function addGroupSilenceBlacklistWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddGroupSilenceBlacklistShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddGroupSilenceBlacklist',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddGroupSilenceBlacklistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddGroupSilenceBlacklistRequest $request
     *
     * @return AddGroupSilenceBlacklistResponse
     */
    public function addGroupSilenceBlacklist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGroupSilenceBlacklistWithOptions($request, $runtime);
    }

    /**
     * @param AddGroupSilenceWhitelistRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return AddGroupSilenceWhitelistResponse
     */
    public function addGroupSilenceWhitelistWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddGroupSilenceWhitelistShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddGroupSilenceWhitelist',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddGroupSilenceWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddGroupSilenceWhitelistRequest $request
     *
     * @return AddGroupSilenceWhitelistResponse
     */
    public function addGroupSilenceWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGroupSilenceWhitelistWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param BindInterconnectionCidRequest $tmpReq  BindInterconnectionCidRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return BindInterconnectionCidResponse BindInterconnectionCidResponse
     */
    public function bindInterconnectionCidWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BindInterconnectionCidShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BindInterconnectionCid',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindInterconnectionCidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param BindInterconnectionCidRequest $request BindInterconnectionCidRequest
     *
     * @return BindInterconnectionCidResponse BindInterconnectionCidResponse
     */
    public function bindInterconnectionCid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindInterconnectionCidWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param BindInterconnectionUidRequest $tmpReq  BindInterconnectionUidRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return BindInterconnectionUidResponse BindInterconnectionUidResponse
     */
    public function bindInterconnectionUidWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BindInterconnectionUidShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BindInterconnectionUid',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindInterconnectionUidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param BindInterconnectionUidRequest $request BindInterconnectionUidRequest
     *
     * @return BindInterconnectionUidResponse BindInterconnectionUidResponse
     */
    public function bindInterconnectionUid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindInterconnectionUidWithOptions($request, $runtime);
    }

    /**
     * @param CancelSilenceAllGroupMembersRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return CancelSilenceAllGroupMembersResponse
     */
    public function cancelSilenceAllGroupMembersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CancelSilenceAllGroupMembersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CancelSilenceAllGroupMembers',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelSilenceAllGroupMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelSilenceAllGroupMembersRequest $request
     *
     * @return CancelSilenceAllGroupMembersResponse
     */
    public function cancelSilenceAllGroupMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelSilenceAllGroupMembersWithOptions($request, $runtime);
    }

    /**
     * @param CreateGroupRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return CreateGroupResponse
     */
    public function createGroupWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateGroup',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateGroupRequest $request
     *
     * @return CreateGroupResponse
     */
    public function createGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGroupWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param CreateRoomRequest $request CreateRoomRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRoomResponse CreateRoomResponse
     */
    public function createRoomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body     = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->request)) {
            $bodyFlat['Request'] = $request->request;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateRoom',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRoomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param CreateRoomRequest $request CreateRoomRequest
     *
     * @return CreateRoomResponse CreateRoomResponse
     */
    public function createRoom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRoomWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteAppResponse
     */
    public function deleteAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteApp',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAppRequest $request
     *
     * @return DeleteAppResponse
     */
    public function deleteApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppWithOptions($request, $runtime);
    }

    /**
     * @param DestroyRoomRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DestroyRoomResponse
     */
    public function destroyRoomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body     = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->request)) {
            $bodyFlat['Request'] = $request->request;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DestroyRoom',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DestroyRoomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DestroyRoomRequest $request
     *
     * @return DestroyRoomResponse
     */
    public function destroyRoom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->destroyRoomWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param DismissGroupRequest $tmpReq  DismissGroupRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DismissGroupResponse DismissGroupResponse
     */
    public function dismissGroupWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DismissGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DismissGroup',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DismissGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param DismissGroupRequest $request DismissGroupRequest
     *
     * @return DismissGroupResponse DismissGroupResponse
     */
    public function dismissGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dismissGroupWithOptions($request, $runtime);
    }

    /**
     * @param GetCommonConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetCommonConfigResponse
     */
    public function getCommonConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetCommonConfig',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCommonConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCommonConfigRequest $request
     *
     * @return GetCommonConfigResponse
     */
    public function getCommonConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCommonConfigWithOptions($request, $runtime);
    }

    /**
     * @param GetGroupByIdRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return GetGroupByIdResponse
     */
    public function getGroupByIdWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetGroupByIdShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetGroupById',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetGroupByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetGroupByIdRequest $request
     *
     * @return GetGroupByIdResponse
     */
    public function getGroupById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGroupByIdWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param GetGroupMemberByIdsRequest $tmpReq  GetGroupMemberByIdsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetGroupMemberByIdsResponse GetGroupMemberByIdsResponse
     */
    public function getGroupMemberByIdsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetGroupMemberByIdsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetGroupMemberByIds',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetGroupMemberByIdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param GetGroupMemberByIdsRequest $request GetGroupMemberByIdsRequest
     *
     * @return GetGroupMemberByIdsResponse GetGroupMemberByIdsResponse
     */
    public function getGroupMemberByIds($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGroupMemberByIdsWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param GetIMConfigRequest $request GetIMConfigRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetIMConfigResponse GetIMConfigResponse
     */
    public function getIMConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetIMConfig',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetIMConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param GetIMConfigRequest $request GetIMConfigRequest
     *
     * @return GetIMConfigResponse GetIMConfigResponse
     */
    public function getIMConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIMConfigWithOptions($request, $runtime);
    }

    /**
     * @param GetLoginTokenRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return GetLoginTokenResponse
     */
    public function getLoginTokenWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetLoginTokenShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetLoginToken',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLoginTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetLoginTokenRequest $request
     *
     * @return GetLoginTokenResponse
     */
    public function getLoginToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLoginTokenWithOptions($request, $runtime);
    }

    /**
     * @param GetMediaUploadUrlRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return GetMediaUploadUrlResponse
     */
    public function getMediaUploadUrlWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetMediaUploadUrlShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetMediaUploadUrl',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMediaUploadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMediaUploadUrlRequest $request
     *
     * @return GetMediaUploadUrlResponse
     */
    public function getMediaUploadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaUploadUrlWithOptions($request, $runtime);
    }

    /**
     * @param GetMediaUrlRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return GetMediaUrlResponse
     */
    public function getMediaUrlWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetMediaUrlShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetMediaUrl',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMediaUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMediaUrlRequest $request
     *
     * @return GetMediaUrlResponse
     */
    public function getMediaUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaUrlWithOptions($request, $runtime);
    }

    /**
     * @param GetMessageByIdRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return GetMessageByIdResponse
     */
    public function getMessageByIdWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetMessageByIdShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetMessageById',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMessageByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMessageByIdRequest $request
     *
     * @return GetMessageByIdResponse
     */
    public function getMessageById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMessageByIdWithOptions($request, $runtime);
    }

    /**
     * @param GetRoomStatisticsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetRoomStatisticsResponse
     */
    public function getRoomStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body     = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->request)) {
            $bodyFlat['Request'] = $request->request;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetRoomStatistics',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRoomStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRoomStatisticsRequest $request
     *
     * @return GetRoomStatisticsResponse
     */
    public function getRoomStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRoomStatisticsWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param GetUserMuteSettingRequest $tmpReq  GetUserMuteSettingRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserMuteSettingResponse GetUserMuteSettingResponse
     */
    public function getUserMuteSettingWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetUserMuteSettingShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetUserMuteSetting',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserMuteSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param GetUserMuteSettingRequest $request GetUserMuteSettingRequest
     *
     * @return GetUserMuteSettingResponse GetUserMuteSettingResponse
     */
    public function getUserMuteSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserMuteSettingWithOptions($request, $runtime);
    }

    /**
     * @param ImportGroupChatConversationRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return ImportGroupChatConversationResponse
     */
    public function importGroupChatConversationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ImportGroupChatConversationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ImportGroupChatConversation',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportGroupChatConversationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ImportGroupChatConversationRequest $request
     *
     * @return ImportGroupChatConversationResponse
     */
    public function importGroupChatConversation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importGroupChatConversationWithOptions($request, $runtime);
    }

    /**
     * @param ImportGroupChatMemberRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return ImportGroupChatMemberResponse
     */
    public function importGroupChatMemberWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ImportGroupChatMemberShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ImportGroupChatMember',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportGroupChatMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ImportGroupChatMemberRequest $request
     *
     * @return ImportGroupChatMemberResponse
     */
    public function importGroupChatMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importGroupChatMemberWithOptions($request, $runtime);
    }

    /**
     * @param ImportMessageRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return ImportMessageResponse
     */
    public function importMessageWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ImportMessageShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ImportMessage',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ImportMessageRequest $request
     *
     * @return ImportMessageResponse
     */
    public function importMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importMessageWithOptions($request, $runtime);
    }

    /**
     * @param ImportSingleConversationRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return ImportSingleConversationResponse
     */
    public function importSingleConversationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ImportSingleConversationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ImportSingleConversation',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportSingleConversationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ImportSingleConversationRequest $request
     *
     * @return ImportSingleConversationResponse
     */
    public function importSingleConversation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importSingleConversationWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param InitTenantRequest $request InitTenantRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return InitTenantResponse InitTenantResponse
     */
    public function initTenantWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body     = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->request)) {
            $bodyFlat['Request'] = $request->request;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InitTenant',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InitTenantResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param InitTenantRequest $request InitTenantRequest
     *
     * @return InitTenantResponse InitTenantResponse
     */
    public function initTenant($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initTenantWithOptions($request, $runtime);
    }

    /**
     * @param KickOffRequest $tmpReq
     * @param RuntimeOptions $runtime
     *
     * @return KickOffResponse
     */
    public function kickOffWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new KickOffShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'KickOff',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return KickOffResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param KickOffRequest $request
     *
     * @return KickOffResponse
     */
    public function kickOff($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->kickOffWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param ListAppInfosRequest $tmpReq  ListAppInfosRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAppInfosResponse ListAppInfosResponse
     */
    public function listAppInfosWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListAppInfosShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListAppInfos',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAppInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param ListAppInfosRequest $request ListAppInfosRequest
     *
     * @return ListAppInfosResponse ListAppInfosResponse
     */
    public function listAppInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppInfosWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListCallbackApiIdsResponse
     */
    public function listCallbackApiIdsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListCallbackApiIds',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCallbackApiIdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListCallbackApiIdsResponse
     */
    public function listCallbackApiIds()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCallbackApiIdsWithOptions($runtime);
    }

    /**
     * @param ListDetailReportStatisticsRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return ListDetailReportStatisticsResponse
     */
    public function listDetailReportStatisticsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListDetailReportStatisticsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDetailReportStatistics',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDetailReportStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDetailReportStatisticsRequest $request
     *
     * @return ListDetailReportStatisticsResponse
     */
    public function listDetailReportStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDetailReportStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param ListGroupAllMembersRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return ListGroupAllMembersResponse
     */
    public function listGroupAllMembersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListGroupAllMembersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListGroupAllMembers',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGroupAllMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListGroupAllMembersRequest $request
     *
     * @return ListGroupAllMembersResponse
     */
    public function listGroupAllMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGroupAllMembersWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param ListGroupSilenceMembersRequest $tmpReq  ListGroupSilenceMembersRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGroupSilenceMembersResponse ListGroupSilenceMembersResponse
     */
    public function listGroupSilenceMembersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListGroupSilenceMembersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListGroupSilenceMembers',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGroupSilenceMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param ListGroupSilenceMembersRequest $request ListGroupSilenceMembersRequest
     *
     * @return ListGroupSilenceMembersResponse ListGroupSilenceMembersResponse
     */
    public function listGroupSilenceMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGroupSilenceMembersWithOptions($request, $runtime);
    }

    /**
     * @param ListRoomMessagesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListRoomMessagesResponse
     */
    public function listRoomMessagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body     = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->request)) {
            $bodyFlat['Request'] = $request->request;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListRoomMessages',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRoomMessagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListRoomMessagesRequest $request
     *
     * @return ListRoomMessagesResponse
     */
    public function listRoomMessages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRoomMessagesWithOptions($request, $runtime);
    }

    /**
     * @param ListRoomUsersRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListRoomUsersResponse
     */
    public function listRoomUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body     = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->request)) {
            $bodyFlat['Request'] = $request->request;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListRoomUsers',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRoomUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListRoomUsersRequest $request
     *
     * @return ListRoomUsersResponse
     */
    public function listRoomUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRoomUsersWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param MuteUsersRequest $tmpReq  MuteUsersRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return MuteUsersResponse MuteUsersResponse
     */
    public function muteUsersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new MuteUsersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'MuteUsers',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MuteUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param MuteUsersRequest $request MuteUsersRequest
     *
     * @return MuteUsersResponse MuteUsersResponse
     */
    public function muteUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->muteUsersWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param QueryInterconnectionCidMappingRequest $tmpReq  QueryInterconnectionCidMappingRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryInterconnectionCidMappingResponse QueryInterconnectionCidMappingResponse
     */
    public function queryInterconnectionCidMappingWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryInterconnectionCidMappingShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryInterconnectionCidMapping',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryInterconnectionCidMappingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param QueryInterconnectionCidMappingRequest $request QueryInterconnectionCidMappingRequest
     *
     * @return QueryInterconnectionCidMappingResponse QueryInterconnectionCidMappingResponse
     */
    public function queryInterconnectionCidMapping($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryInterconnectionCidMappingWithOptions($request, $runtime);
    }

    /**
     * @param RecallMessageRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return RecallMessageResponse
     */
    public function recallMessageWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RecallMessageShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RecallMessage',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecallMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecallMessageRequest $request
     *
     * @return RecallMessageResponse
     */
    public function recallMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recallMessageWithOptions($request, $runtime);
    }

    /**
     * @param RemoveGroupExtensionByKeysRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return RemoveGroupExtensionByKeysResponse
     */
    public function removeGroupExtensionByKeysWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RemoveGroupExtensionByKeysShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RemoveGroupExtensionByKeys',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveGroupExtensionByKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveGroupExtensionByKeysRequest $request
     *
     * @return RemoveGroupExtensionByKeysResponse
     */
    public function removeGroupExtensionByKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeGroupExtensionByKeysWithOptions($request, $runtime);
    }

    /**
     * @param RemoveGroupMemberExtensionByKeysRequest $tmpReq
     * @param RuntimeOptions                          $runtime
     *
     * @return RemoveGroupMemberExtensionByKeysResponse
     */
    public function removeGroupMemberExtensionByKeysWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RemoveGroupMemberExtensionByKeysShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RemoveGroupMemberExtensionByKeys',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveGroupMemberExtensionByKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveGroupMemberExtensionByKeysRequest $request
     *
     * @return RemoveGroupMemberExtensionByKeysResponse
     */
    public function removeGroupMemberExtensionByKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeGroupMemberExtensionByKeysWithOptions($request, $runtime);
    }

    /**
     * @param RemoveGroupMembersRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return RemoveGroupMembersResponse
     */
    public function removeGroupMembersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RemoveGroupMembersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RemoveGroupMembers',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveGroupMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveGroupMembersRequest $request
     *
     * @return RemoveGroupMembersResponse
     */
    public function removeGroupMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeGroupMembersWithOptions($request, $runtime);
    }

    /**
     * @param RemoveGroupSilenceBlacklistRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return RemoveGroupSilenceBlacklistResponse
     */
    public function removeGroupSilenceBlacklistWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RemoveGroupSilenceBlacklistShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RemoveGroupSilenceBlacklist',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveGroupSilenceBlacklistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveGroupSilenceBlacklistRequest $request
     *
     * @return RemoveGroupSilenceBlacklistResponse
     */
    public function removeGroupSilenceBlacklist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeGroupSilenceBlacklistWithOptions($request, $runtime);
    }

    /**
     * @param RemoveGroupSilenceWhitelistRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return RemoveGroupSilenceWhitelistResponse
     */
    public function removeGroupSilenceWhitelistWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RemoveGroupSilenceWhitelistShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RemoveGroupSilenceWhitelist',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveGroupSilenceWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveGroupSilenceWhitelistRequest $request
     *
     * @return RemoveGroupSilenceWhitelistResponse
     */
    public function removeGroupSilenceWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeGroupSilenceWhitelistWithOptions($request, $runtime);
    }

    /**
     * @param RemoveMessageExtensionByKeysRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return RemoveMessageExtensionByKeysResponse
     */
    public function removeMessageExtensionByKeysWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RemoveMessageExtensionByKeysShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RemoveMessageExtensionByKeys',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveMessageExtensionByKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveMessageExtensionByKeysRequest $request
     *
     * @return RemoveMessageExtensionByKeysResponse
     */
    public function removeMessageExtensionByKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeMessageExtensionByKeysWithOptions($request, $runtime);
    }

    /**
     * @param RemoveSingleChatExtensionByKeysRequest $tmpReq
     * @param RuntimeOptions                         $runtime
     *
     * @return RemoveSingleChatExtensionByKeysResponse
     */
    public function removeSingleChatExtensionByKeysWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RemoveSingleChatExtensionByKeysShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RemoveSingleChatExtensionByKeys',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveSingleChatExtensionByKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveSingleChatExtensionByKeysRequest $request
     *
     * @return RemoveSingleChatExtensionByKeysResponse
     */
    public function removeSingleChatExtensionByKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeSingleChatExtensionByKeysWithOptions($request, $runtime);
    }

    /**
     * @param RemoveUserConversationExtensionByKeysRequest $tmpReq
     * @param RuntimeOptions                               $runtime
     *
     * @return RemoveUserConversationExtensionByKeysResponse
     */
    public function removeUserConversationExtensionByKeysWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RemoveUserConversationExtensionByKeysShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RemoveUserConversationExtensionByKeys',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveUserConversationExtensionByKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveUserConversationExtensionByKeysRequest $request
     *
     * @return RemoveUserConversationExtensionByKeysResponse
     */
    public function removeUserConversationExtensionByKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeUserConversationExtensionByKeysWithOptions($request, $runtime);
    }

    /**
     * @param SendCustomMessageRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SendCustomMessageResponse
     */
    public function sendCustomMessageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body     = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->request)) {
            $bodyFlat['Request'] = $request->request;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SendCustomMessage',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendCustomMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SendCustomMessageRequest $request
     *
     * @return SendCustomMessageResponse
     */
    public function sendCustomMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendCustomMessageWithOptions($request, $runtime);
    }

    /**
     * @param SendCustomMessageToRoomUsersRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return SendCustomMessageToRoomUsersResponse
     */
    public function sendCustomMessageToRoomUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body     = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->receivers)) {
            $bodyFlat['Receivers'] = $request->receivers;
        }
        if (!Utils::isUnset($request->request)) {
            $bodyFlat['Request'] = $request->request;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SendCustomMessageToRoomUsers',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendCustomMessageToRoomUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SendCustomMessageToRoomUsersRequest $request
     *
     * @return SendCustomMessageToRoomUsersResponse
     */
    public function sendCustomMessageToRoomUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendCustomMessageToRoomUsersWithOptions($request, $runtime);
    }

    /**
     * @param SendMessageRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return SendMessageResponse
     */
    public function sendMessageWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SendMessageShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SendMessage',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SendMessageRequest $request
     *
     * @return SendMessageResponse
     */
    public function sendMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendMessageWithOptions($request, $runtime);
    }

    /**
     * @param SetGroupExtensionByKeysRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return SetGroupExtensionByKeysResponse
     */
    public function setGroupExtensionByKeysWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SetGroupExtensionByKeysShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SetGroupExtensionByKeys',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetGroupExtensionByKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetGroupExtensionByKeysRequest $request
     *
     * @return SetGroupExtensionByKeysResponse
     */
    public function setGroupExtensionByKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setGroupExtensionByKeysWithOptions($request, $runtime);
    }

    /**
     * @param SetGroupMemberExtensionByKeysRequest $tmpReq
     * @param RuntimeOptions                       $runtime
     *
     * @return SetGroupMemberExtensionByKeysResponse
     */
    public function setGroupMemberExtensionByKeysWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SetGroupMemberExtensionByKeysShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SetGroupMemberExtensionByKeys',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetGroupMemberExtensionByKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetGroupMemberExtensionByKeysRequest $request
     *
     * @return SetGroupMemberExtensionByKeysResponse
     */
    public function setGroupMemberExtensionByKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setGroupMemberExtensionByKeysWithOptions($request, $runtime);
    }

    /**
     * @param SetGroupOwnerRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return SetGroupOwnerResponse
     */
    public function setGroupOwnerWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SetGroupOwnerShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SetGroupOwner',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetGroupOwnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetGroupOwnerRequest $request
     *
     * @return SetGroupOwnerResponse
     */
    public function setGroupOwner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setGroupOwnerWithOptions($request, $runtime);
    }

    /**
     * @param SetMessageExtensionByKeysRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return SetMessageExtensionByKeysResponse
     */
    public function setMessageExtensionByKeysWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SetMessageExtensionByKeysShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SetMessageExtensionByKeys',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetMessageExtensionByKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetMessageExtensionByKeysRequest $request
     *
     * @return SetMessageExtensionByKeysResponse
     */
    public function setMessageExtensionByKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setMessageExtensionByKeysWithOptions($request, $runtime);
    }

    /**
     * @param SetMessageReadRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return SetMessageReadResponse
     */
    public function setMessageReadWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SetMessageReadShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SetMessageRead',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetMessageReadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetMessageReadRequest $request
     *
     * @return SetMessageReadResponse
     */
    public function setMessageRead($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setMessageReadWithOptions($request, $runtime);
    }

    /**
     * @param SetSingleChatExtensionByKeysRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return SetSingleChatExtensionByKeysResponse
     */
    public function setSingleChatExtensionByKeysWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SetSingleChatExtensionByKeysShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SetSingleChatExtensionByKeys',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetSingleChatExtensionByKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetSingleChatExtensionByKeysRequest $request
     *
     * @return SetSingleChatExtensionByKeysResponse
     */
    public function setSingleChatExtensionByKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setSingleChatExtensionByKeysWithOptions($request, $runtime);
    }

    /**
     * @param SetUserConversationExtensionByKeysRequest $tmpReq
     * @param RuntimeOptions                            $runtime
     *
     * @return SetUserConversationExtensionByKeysResponse
     */
    public function setUserConversationExtensionByKeysWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SetUserConversationExtensionByKeysShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SetUserConversationExtensionByKeys',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetUserConversationExtensionByKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetUserConversationExtensionByKeysRequest $request
     *
     * @return SetUserConversationExtensionByKeysResponse
     */
    public function setUserConversationExtensionByKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setUserConversationExtensionByKeysWithOptions($request, $runtime);
    }

    /**
     * @param SilenceAllGroupMembersRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return SilenceAllGroupMembersResponse
     */
    public function silenceAllGroupMembersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SilenceAllGroupMembersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SilenceAllGroupMembers',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SilenceAllGroupMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SilenceAllGroupMembersRequest $request
     *
     * @return SilenceAllGroupMembersResponse
     */
    public function silenceAllGroupMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->silenceAllGroupMembersWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param UnbindInterconnectionUidRequest $tmpReq  UnbindInterconnectionUidRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UnbindInterconnectionUidResponse UnbindInterconnectionUidResponse
     */
    public function unbindInterconnectionUidWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UnbindInterconnectionUidShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UnbindInterconnectionUid',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindInterconnectionUidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param UnbindInterconnectionUidRequest $request UnbindInterconnectionUidRequest
     *
     * @return UnbindInterconnectionUidResponse UnbindInterconnectionUidResponse
     */
    public function unbindInterconnectionUid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindInterconnectionUidWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAppNameRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateAppNameResponse
     */
    public function updateAppNameWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateAppNameShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateAppName',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAppNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAppNameRequest $request
     *
     * @return UpdateAppNameResponse
     */
    public function updateAppName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppNameWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAppStatusRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateAppStatusResponse
     */
    public function updateAppStatusWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateAppStatusShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateAppStatus',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAppStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAppStatusRequest $request
     *
     * @return UpdateAppStatusResponse
     */
    public function updateAppStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppStatusWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param UpdateCallbackConfigRequest $tmpReq  UpdateCallbackConfigRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCallbackConfigResponse UpdateCallbackConfigResponse
     */
    public function updateCallbackConfigWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateCallbackConfigShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateCallbackConfig',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCallbackConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param UpdateCallbackConfigRequest $request UpdateCallbackConfigRequest
     *
     * @return UpdateCallbackConfigResponse UpdateCallbackConfigResponse
     */
    public function updateCallbackConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCallbackConfigWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGroupIconRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateGroupIconResponse
     */
    public function updateGroupIconWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateGroupIconShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateGroupIcon',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGroupIconResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateGroupIconRequest $request
     *
     * @return UpdateGroupIconResponse
     */
    public function updateGroupIcon($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGroupIconWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGroupMembersRoleRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateGroupMembersRoleResponse
     */
    public function updateGroupMembersRoleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateGroupMembersRoleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateGroupMembersRole',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGroupMembersRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateGroupMembersRoleRequest $request
     *
     * @return UpdateGroupMembersRoleResponse
     */
    public function updateGroupMembersRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGroupMembersRoleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGroupTitleRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateGroupTitleResponse
     */
    public function updateGroupTitleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateGroupTitleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateGroupTitle',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGroupTitleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateGroupTitleRequest $request
     *
     * @return UpdateGroupTitleResponse
     */
    public function updateGroupTitle($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGroupTitleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMsgRecallIntervalRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateMsgRecallIntervalResponse
     */
    public function updateMsgRecallIntervalWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateMsgRecallIntervalShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestParams, 'RequestParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestParamsShrink)) {
            $body['RequestParams'] = $request->requestParamsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateMsgRecallInterval',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMsgRecallIntervalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateMsgRecallIntervalRequest $request
     *
     * @return UpdateMsgRecallIntervalResponse
     */
    public function updateMsgRecallInterval($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMsgRecallIntervalWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTenantStatusRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateTenantStatusResponse
     */
    public function updateTenantStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body     = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->request)) {
            $bodyFlat['Request'] = $request->request;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateTenantStatus',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTenantStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateTenantStatusRequest $request
     *
     * @return UpdateTenantStatusResponse
     */
    public function updateTenantStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTenantStatusWithOptions($request, $runtime);
    }
}
