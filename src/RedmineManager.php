<?php

namespace SZonov\Redmine;

use Redmine\Api as A;
use Redmine\Client\Client;
use Redmine\Client\NativeCurlClient;

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
class RedmineManager
{
    protected array $hosts = [];

    public function __construct(protected array $config)
    {
    }

    public function __call(string $name, array $arguments)
    {
        return $this->host()->$name(...$arguments);
    }

    public function host($name = null): RedmineHost
    {
        $name = $name ?: $this->config['default'];

        return $this->hosts[$name] ??= new RedmineHost($this->buildClient($name));
    }

    protected function buildClient(string $name): Client
    {
        $c = $this->config['hosts'][$name] ?? [];

        if (empty($c) || !isset($c['host']) || !isset($c['token']))
        {
            throw new \InvalidArgumentException("Invalid host:{$name} configuration");
        }

        return new NativeCurlClient($c['host'], $c['token'], $c['password'] ?? null);
    }
}
