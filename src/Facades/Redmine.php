<?php

namespace SZonov\Redmine\Facades;

use Illuminate\Support\Facades\Facade;
use Redmine\Api as A;
use Redmine\Client\Client;
use SZonov\Redmine\RedmineHost;

/**
 * @method static RedmineHost host($name = null)
 * @method static Client client()
 * @method static A\Attachment attachment()
 * @method static A\Group group()
 * @method static A\CustomField custom_fields()
 * @method static A\Issue issue()
 * @method static A\IssueCategory issue_category()
 * @method static A\IssuePriority issue_priority()
 * @method static A\IssueRelation issue_relation()
 * @method static A\IssueStatus issue_status()
 * @method static A\Membership membership()
 * @method static A\News news()
 * @method static A\Project project()
 * @method static A\Query query()
 * @method static A\Role role()
 * @method static A\TimeEntry time_entry()
 * @method static A\TimeEntryActivity time_entry_activity()
 * @method static A\Tracker tracker()
 * @method static A\User user()
 * @method static A\Version version()
 * @method static A\Wiki wiki()
 * @method static A\Search search()
 */
class Redmine extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'redmine';
    }
}
