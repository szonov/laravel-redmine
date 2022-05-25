<?php

namespace SZonov\Redmine;

use Redmine\Api as A;
use Redmine\Client\Client;

/**
 * @method A\Attachment attachment()
 * @method A\Group group()
 * @method A\CustomField custom_fields()
 * @method A\Issue issue()
 * @method A\IssueCategory issue_category()
 * @method A\IssuePriority issue_priority()
 * @method A\IssueRelation issue_relation()
 * @method A\IssueStatus issue_status()
 * @method A\Membership membership()
 * @method A\News news()
 * @method A\Project project()
 * @method A\Query query()
 * @method A\Role role()
 * @method A\TimeEntry time_entry()
 * @method A\TimeEntryActivity time_entry_activity()
 * @method A\Tracker tracker()
 * @method A\User user()
 * @method A\Version version()
 * @method A\Wiki wiki()
 * @method A\Search search()
 */
class RedmineHost
{
    public function __construct(private Client $client)
    {
    }

    public function client(): Client
    {
        return $this->client;
    }

    public function __call(string $name, array $arguments)
    {
        return $this->client->getApi($name);
    }
}
