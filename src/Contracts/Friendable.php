<?php

/*
 * This file is part of Laravel Friendable.
 *
 * (c) PackageBackup <hello@draperstud.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PackageBackup\Friendable\Contracts;

use Illuminate\Database\Eloquent\Model;

/**
 * Interface Friendable.
 */
interface Friendable
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function friends();

    /**
     * @param Model $recipient
     *
     * @return mixed
     */
    public function befriend(Model $recipient);

    /**
     * @param Model $recipient
     *
     * @return mixed
     */
    public function unfriend(Model $recipient);

    /**
     * @param Model $recipient
     * @param null  $status
     *
     * @return mixed
     */
    public function isFriendsWith(Model $recipient, $status = null);

    /**
     * @param Model $recipient
     *
     * @return mixed
     */
    public function acceptFriendRequest(Model $recipient);

    /**
     * @param Model $recipient
     *
     * @return mixed
     */
    public function denyFriendRequest(Model $recipient);

    /**
     * @param Model $recipient
     *
     * @return mixed
     */
    public function blockFriendRequest(Model $recipient);

    /**
     * @param Model $recipient
     *
     * @return mixed
     */
    public function unblockFriendRequest(Model $recipient);

    /**
     * @param $recipient
     *
     * @return mixed
     */
    public function getFriendship($recipient);

    /**
     * @param null $limit
     * @param null $offset
     *
     * @return mixed
     */
    public function getAllFriendships($limit = null, $offset = null);

    /**
     * @param null $limit
     * @param int  $offset
     *
     * @return mixed
     */
    public function getPendingFriendships($limit = null, $offset = 0);

    /**
     * @param null $limit
     * @param int  $offset
     *
     * @return mixed
     */
    public function getAcceptedFriendships($limit = null, $offset = 0);

    /**
     * @param null $limit
     * @param int  $offset
     *
     * @return mixed
     */
    public function getDeniedFriendships($limit = null, $offset = 0);

    /**
     * @param null $limit
     * @param int  $offset
     *
     * @return mixed
     */
    public function getBlockedFriendships($limit = null, $offset = 0);

    /**
     * @param Model $recipient
     *
     * @return mixed
     */
    public function hasBlocked(Model $recipient);

    /**
     * @param Model $recipient
     *
     * @return mixed
     */
    public function isBlockedBy(Model $recipient);

    /**
     * @return mixed
     */
    public function getFriendRequests();
}
