<?php

namespace App\Services;

class Github {

  private $programmingLang;

  public function setProgrammingLanguage($programmingLang) {
    $this->programmingLang = $programmingLang;
    return $this;
  }

  public static function search($date, $order='desc', $per_page=10){
    $result = json_decode('{
      "total_count": 27714519,
      "incomplete_results": true,
      "items": [
        {
          "id": 223087557,
          "node_id": "MDEwOlJlcG9zaXRvcnkyMjMwODc1NTc=",
          "name": "slack-disable-wysiwyg-bookmarklet",
          "full_name": "kfahy/slack-disable-wysiwyg-bookmarklet",
          "private": false,
          "owner": {
            "login": "kfahy",
            "id": 596174,
            "node_id": "MDQ6VXNlcjU5NjE3NA==",
            "avatar_url": "https://avatars.githubusercontent.com/u/596174?v=4",
            "gravatar_id": "",
            "url": "https://api.github.com/users/kfahy",
            "html_url": "https://github.com/kfahy",
            "followers_url": "https://api.github.com/users/kfahy/followers",
            "following_url": "https://api.github.com/users/kfahy/following{/other_user}",
            "gists_url": "https://api.github.com/users/kfahy/gists{/gist_id}",
            "starred_url": "https://api.github.com/users/kfahy/starred{/owner}{/repo}",
            "subscriptions_url": "https://api.github.com/users/kfahy/subscriptions",
            "organizations_url": "https://api.github.com/users/kfahy/orgs",
            "repos_url": "https://api.github.com/users/kfahy/repos",
            "events_url": "https://api.github.com/users/kfahy/events{/privacy}",
            "received_events_url": "https://api.github.com/users/kfahy/received_events",
            "type": "User",
            "site_admin": false
          },
          "html_url": "https://github.com/kfahy/slack-disable-wysiwyg-bookmarklet",
          "description": "Disables the WYSIWYG editor in Slack.",
          "fork": false,
          "url": "https://api.github.com/repos/kfahy/slack-disable-wysiwyg-bookmarklet",
          "forks_url": "https://api.github.com/repos/kfahy/slack-disable-wysiwyg-bookmarklet/forks",
          "keys_url": "https://api.github.com/repos/kfahy/slack-disable-wysiwyg-bookmarklet/keys{/key_id}",
          "collaborators_url": "https://api.github.com/repos/kfahy/slack-disable-wysiwyg-bookmarklet/collaborators{/collaborator}",
          "teams_url": "https://api.github.com/repos/kfahy/slack-disable-wysiwyg-bookmarklet/teams",
          "hooks_url": "https://api.github.com/repos/kfahy/slack-disable-wysiwyg-bookmarklet/hooks",
          "issue_events_url": "https://api.github.com/repos/kfahy/slack-disable-wysiwyg-bookmarklet/issues/events{/number}",
          "events_url": "https://api.github.com/repos/kfahy/slack-disable-wysiwyg-bookmarklet/events",
          "assignees_url": "https://api.github.com/repos/kfahy/slack-disable-wysiwyg-bookmarklet/assignees{/user}",
          "branches_url": "https://api.github.com/repos/kfahy/slack-disable-wysiwyg-bookmarklet/branches{/branch}",
          "tags_url": "https://api.github.com/repos/kfahy/slack-disable-wysiwyg-bookmarklet/tags",
          "blobs_url": "https://api.github.com/repos/kfahy/slack-disable-wysiwyg-bookmarklet/git/blobs{/sha}",
          "git_tags_url": "https://api.github.com/repos/kfahy/slack-disable-wysiwyg-bookmarklet/git/tags{/sha}",
          "git_refs_url": "https://api.github.com/repos/kfahy/slack-disable-wysiwyg-bookmarklet/git/refs{/sha}",
          "trees_url": "https://api.github.com/repos/kfahy/slack-disable-wysiwyg-bookmarklet/git/trees{/sha}",
          "statuses_url": "https://api.github.com/repos/kfahy/slack-disable-wysiwyg-bookmarklet/statuses/{sha}",
          "languages_url": "https://api.github.com/repos/kfahy/slack-disable-wysiwyg-bookmarklet/languages",
          "stargazers_url": "https://api.github.com/repos/kfahy/slack-disable-wysiwyg-bookmarklet/stargazers",
          "contributors_url": "https://api.github.com/repos/kfahy/slack-disable-wysiwyg-bookmarklet/contributors",
          "subscribers_url": "https://api.github.com/repos/kfahy/slack-disable-wysiwyg-bookmarklet/subscribers",
          "subscription_url": "https://api.github.com/repos/kfahy/slack-disable-wysiwyg-bookmarklet/subscription",
          "commits_url": "https://api.github.com/repos/kfahy/slack-disable-wysiwyg-bookmarklet/commits{/sha}",
          "git_commits_url": "https://api.github.com/repos/kfahy/slack-disable-wysiwyg-bookmarklet/git/commits{/sha}",
          "comments_url": "https://api.github.com/repos/kfahy/slack-disable-wysiwyg-bookmarklet/comments{/number}",
          "issue_comment_url": "https://api.github.com/repos/kfahy/slack-disable-wysiwyg-bookmarklet/issues/comments{/number}",
          "contents_url": "https://api.github.com/repos/kfahy/slack-disable-wysiwyg-bookmarklet/contents/{+path}",
          "compare_url": "https://api.github.com/repos/kfahy/slack-disable-wysiwyg-bookmarklet/compare/{base}...{head}",
          "merges_url": "https://api.github.com/repos/kfahy/slack-disable-wysiwyg-bookmarklet/merges",
          "archive_url": "https://api.github.com/repos/kfahy/slack-disable-wysiwyg-bookmarklet/{archive_format}{/ref}",
          "downloads_url": "https://api.github.com/repos/kfahy/slack-disable-wysiwyg-bookmarklet/downloads",
          "issues_url": "https://api.github.com/repos/kfahy/slack-disable-wysiwyg-bookmarklet/issues{/number}",
          "pulls_url": "https://api.github.com/repos/kfahy/slack-disable-wysiwyg-bookmarklet/pulls{/number}",
          "milestones_url": "https://api.github.com/repos/kfahy/slack-disable-wysiwyg-bookmarklet/milestones{/number}",
          "notifications_url": "https://api.github.com/repos/kfahy/slack-disable-wysiwyg-bookmarklet/notifications{?since,all,participating}",
          "labels_url": "https://api.github.com/repos/kfahy/slack-disable-wysiwyg-bookmarklet/labels{/name}",
          "releases_url": "https://api.github.com/repos/kfahy/slack-disable-wysiwyg-bookmarklet/releases{/id}",
          "deployments_url": "https://api.github.com/repos/kfahy/slack-disable-wysiwyg-bookmarklet/deployments",
          "created_at": "2019-11-21T04:24:46Z",
          "updated_at": "2020-11-30T21:31:21Z",
          "pushed_at": "2019-12-09T20:44:56Z",
          "git_url": "git://github.com/kfahy/slack-disable-wysiwyg-bookmarklet.git",
          "ssh_url": "git@github.com:kfahy/slack-disable-wysiwyg-bookmarklet.git",
          "clone_url": "https://github.com/kfahy/slack-disable-wysiwyg-bookmarklet.git",
          "svn_url": "https://github.com/kfahy/slack-disable-wysiwyg-bookmarklet",
          "homepage": null,
          "size": 136,
          "stargazers_count": 844,
          "watchers_count": 844,
          "language": "Shell",
          "has_issues": true,
          "has_projects": true,
          "has_downloads": true,
          "has_wiki": true,
          "has_pages": false,
          "forks_count": 27,
          "mirror_url": null,
          "archived": false,
          "disabled": false,
          "open_issues_count": 9,
          "license": {
            "key": "mit",
            "name": "MIT License",
            "spdx_id": "MIT",
            "url": "https://api.github.com/licenses/mit",
            "node_id": "MDc6TGljZW5zZTEz"
          },
          "forks": 27,
          "open_issues": 9,
          "watchers": 844,
          "default_branch": "master",
          "score": 1.0
        },
        {
          "id": 231836238,
          "node_id": "MDEwOlJlcG9zaXRvcnkyMzE4MzYyMzg=",
          "name": "LInQer",
          "full_name": "Siderite/LInQer",
          "private": false,
          "owner": {
            "login": "Siderite",
            "id": 260529,
            "node_id": "MDQ6VXNlcjI2MDUyOQ==",
            "avatar_url": "https://avatars.githubusercontent.com/u/260529?v=4",
            "gravatar_id": "",
            "url": "https://api.github.com/users/Siderite",
            "html_url": "https://github.com/Siderite",
            "followers_url": "https://api.github.com/users/Siderite/followers",
            "following_url": "https://api.github.com/users/Siderite/following{/other_user}",
            "gists_url": "https://api.github.com/users/Siderite/gists{/gist_id}",
            "starred_url": "https://api.github.com/users/Siderite/starred{/owner}{/repo}",
            "subscriptions_url": "https://api.github.com/users/Siderite/subscriptions",
            "organizations_url": "https://api.github.com/users/Siderite/orgs",
            "repos_url": "https://api.github.com/users/Siderite/repos",
            "events_url": "https://api.github.com/users/Siderite/events{/privacy}",
            "received_events_url": "https://api.github.com/users/Siderite/received_events",
            "type": "User",
            "site_admin": false
          },
          "html_url": "https://github.com/Siderite/LInQer",
          "description": "The C# Language Integrated Queries ported for Javascript for amazing performance",
          "fork": false,
          "url": "https://api.github.com/repos/Siderite/LInQer",
          "forks_url": "https://api.github.com/repos/Siderite/LInQer/forks",
          "keys_url": "https://api.github.com/repos/Siderite/LInQer/keys{/key_id}",
          "collaborators_url": "https://api.github.com/repos/Siderite/LInQer/collaborators{/collaborator}",
          "teams_url": "https://api.github.com/repos/Siderite/LInQer/teams",
          "hooks_url": "https://api.github.com/repos/Siderite/LInQer/hooks",
          "issue_events_url": "https://api.github.com/repos/Siderite/LInQer/issues/events{/number}",
          "events_url": "https://api.github.com/repos/Siderite/LInQer/events",
          "assignees_url": "https://api.github.com/repos/Siderite/LInQer/assignees{/user}",
          "branches_url": "https://api.github.com/repos/Siderite/LInQer/branches{/branch}",
          "tags_url": "https://api.github.com/repos/Siderite/LInQer/tags",
          "blobs_url": "https://api.github.com/repos/Siderite/LInQer/git/blobs{/sha}",
          "git_tags_url": "https://api.github.com/repos/Siderite/LInQer/git/tags{/sha}",
          "git_refs_url": "https://api.github.com/repos/Siderite/LInQer/git/refs{/sha}",
          "trees_url": "https://api.github.com/repos/Siderite/LInQer/git/trees{/sha}",
          "statuses_url": "https://api.github.com/repos/Siderite/LInQer/statuses/{sha}",
          "languages_url": "https://api.github.com/repos/Siderite/LInQer/languages",
          "stargazers_url": "https://api.github.com/repos/Siderite/LInQer/stargazers",
          "contributors_url": "https://api.github.com/repos/Siderite/LInQer/contributors",
          "subscribers_url": "https://api.github.com/repos/Siderite/LInQer/subscribers",
          "subscription_url": "https://api.github.com/repos/Siderite/LInQer/subscription",
          "commits_url": "https://api.github.com/repos/Siderite/LInQer/commits{/sha}",
          "git_commits_url": "https://api.github.com/repos/Siderite/LInQer/git/commits{/sha}",
          "comments_url": "https://api.github.com/repos/Siderite/LInQer/comments{/number}",
          "issue_comment_url": "https://api.github.com/repos/Siderite/LInQer/issues/comments{/number}",
          "contents_url": "https://api.github.com/repos/Siderite/LInQer/contents/{+path}",
          "compare_url": "https://api.github.com/repos/Siderite/LInQer/compare/{base}...{head}",
          "merges_url": "https://api.github.com/repos/Siderite/LInQer/merges",
          "archive_url": "https://api.github.com/repos/Siderite/LInQer/{archive_format}{/ref}",
          "downloads_url": "https://api.github.com/repos/Siderite/LInQer/downloads",
          "issues_url": "https://api.github.com/repos/Siderite/LInQer/issues{/number}",
          "pulls_url": "https://api.github.com/repos/Siderite/LInQer/pulls{/number}",
          "milestones_url": "https://api.github.com/repos/Siderite/LInQer/milestones{/number}",
          "notifications_url": "https://api.github.com/repos/Siderite/LInQer/notifications{?since,all,participating}",
          "labels_url": "https://api.github.com/repos/Siderite/LInQer/labels{/name}",
          "releases_url": "https://api.github.com/repos/Siderite/LInQer/releases{/id}",
          "deployments_url": "https://api.github.com/repos/Siderite/LInQer/deployments",
          "created_at": "2020-01-04T22:17:53Z",
          "updated_at": "2020-11-30T07:55:35Z",
          "pushed_at": "2020-09-20T09:26:43Z",
          "git_url": "git://github.com/Siderite/LInQer.git",
          "ssh_url": "git@github.com:Siderite/LInQer.git",
          "clone_url": "https://github.com/Siderite/LInQer.git",
          "svn_url": "https://github.com/Siderite/LInQer",
          "homepage": "https://siderite.dev/blog/linq-in-javascript-linqer/",
          "size": 318,
          "stargazers_count": 515,
          "watchers_count": 515,
          "language": "JavaScript",
          "has_issues": true,
          "has_projects": true,
          "has_downloads": true,
          "has_wiki": true,
          "has_pages": true,
          "forks_count": 13,
          "mirror_url": null,
          "archived": false,
          "disabled": false,
          "open_issues_count": 2,
          "license": {
            "key": "mit",
            "name": "MIT License",
            "spdx_id": "MIT",
            "url": "https://api.github.com/licenses/mit",
            "node_id": "MDc6TGljZW5zZTEz"
          },
          "forks": 13,
          "open_issues": 2,
          "watchers": 515,
          "default_branch": "master",
          "score": 1.0
        },
        {
          "id": 191018270,
          "node_id": "MDEwOlJlcG9zaXRvcnkxOTEwMTgyNzA=",
          "name": "navigation-ex",
          "full_name": "react-navigation/navigation-ex",
          "private": false,
          "owner": {
            "login": "react-navigation",
            "id": 29647600,
            "node_id": "MDEyOk9yZ2FuaXphdGlvbjI5NjQ3NjAw",
            "avatar_url": "https://avatars.githubusercontent.com/u/29647600?v=4",
            "gravatar_id": "",
            "url": "https://api.github.com/users/react-navigation",
            "html_url": "https://github.com/react-navigation",
            "followers_url": "https://api.github.com/users/react-navigation/followers",
            "following_url": "https://api.github.com/users/react-navigation/following{/other_user}",
            "gists_url": "https://api.github.com/users/react-navigation/gists{/gist_id}",
            "starred_url": "https://api.github.com/users/react-navigation/starred{/owner}{/repo}",
            "subscriptions_url": "https://api.github.com/users/react-navigation/subscriptions",
            "organizations_url": "https://api.github.com/users/react-navigation/orgs",
            "repos_url": "https://api.github.com/users/react-navigation/repos",
            "events_url": "https://api.github.com/users/react-navigation/events{/privacy}",
            "received_events_url": "https://api.github.com/users/react-navigation/received_events",
            "type": "Organization",
            "site_admin": false
          },
          "html_url": "https://github.com/react-navigation/navigation-ex",
          "description": "Routing and navigation for your React Native apps",
          "fork": false,
          "url": "https://api.github.com/repos/react-navigation/navigation-ex",
          "forks_url": "https://api.github.com/repos/react-navigation/navigation-ex/forks",
          "keys_url": "https://api.github.com/repos/react-navigation/navigation-ex/keys{/key_id}",
          "collaborators_url": "https://api.github.com/repos/react-navigation/navigation-ex/collaborators{/collaborator}",
          "teams_url": "https://api.github.com/repos/react-navigation/navigation-ex/teams",
          "hooks_url": "https://api.github.com/repos/react-navigation/navigation-ex/hooks",
          "issue_events_url": "https://api.github.com/repos/react-navigation/navigation-ex/issues/events{/number}",
          "events_url": "https://api.github.com/repos/react-navigation/navigation-ex/events",
          "assignees_url": "https://api.github.com/repos/react-navigation/navigation-ex/assignees{/user}",
          "branches_url": "https://api.github.com/repos/react-navigation/navigation-ex/branches{/branch}",
          "tags_url": "https://api.github.com/repos/react-navigation/navigation-ex/tags",
          "blobs_url": "https://api.github.com/repos/react-navigation/navigation-ex/git/blobs{/sha}",
          "git_tags_url": "https://api.github.com/repos/react-navigation/navigation-ex/git/tags{/sha}",
          "git_refs_url": "https://api.github.com/repos/react-navigation/navigation-ex/git/refs{/sha}",
          "trees_url": "https://api.github.com/repos/react-navigation/navigation-ex/git/trees{/sha}",
          "statuses_url": "https://api.github.com/repos/react-navigation/navigation-ex/statuses/{sha}",
          "languages_url": "https://api.github.com/repos/react-navigation/navigation-ex/languages",
          "stargazers_url": "https://api.github.com/repos/react-navigation/navigation-ex/stargazers",
          "contributors_url": "https://api.github.com/repos/react-navigation/navigation-ex/contributors",
          "subscribers_url": "https://api.github.com/repos/react-navigation/navigation-ex/subscribers",
          "subscription_url": "https://api.github.com/repos/react-navigation/navigation-ex/subscription",
          "commits_url": "https://api.github.com/repos/react-navigation/navigation-ex/commits{/sha}",
          "git_commits_url": "https://api.github.com/repos/react-navigation/navigation-ex/git/commits{/sha}",
          "comments_url": "https://api.github.com/repos/react-navigation/navigation-ex/comments{/number}",
          "issue_comment_url": "https://api.github.com/repos/react-navigation/navigation-ex/issues/comments{/number}",
          "contents_url": "https://api.github.com/repos/react-navigation/navigation-ex/contents/{+path}",
          "compare_url": "https://api.github.com/repos/react-navigation/navigation-ex/compare/{base}...{head}",
          "merges_url": "https://api.github.com/repos/react-navigation/navigation-ex/merges",
          "archive_url": "https://api.github.com/repos/react-navigation/navigation-ex/{archive_format}{/ref}",
          "downloads_url": "https://api.github.com/repos/react-navigation/navigation-ex/downloads",
          "issues_url": "https://api.github.com/repos/react-navigation/navigation-ex/issues{/number}",
          "pulls_url": "https://api.github.com/repos/react-navigation/navigation-ex/pulls{/number}",
          "milestones_url": "https://api.github.com/repos/react-navigation/navigation-ex/milestones{/number}",
          "notifications_url": "https://api.github.com/repos/react-navigation/navigation-ex/notifications{?since,all,participating}",
          "labels_url": "https://api.github.com/repos/react-navigation/navigation-ex/labels{/name}",
          "releases_url": "https://api.github.com/repos/react-navigation/navigation-ex/releases{/id}",
          "deployments_url": "https://api.github.com/repos/react-navigation/navigation-ex/deployments",
          "created_at": "2019-06-09T14:45:26Z",
          "updated_at": "2020-12-16T06:04:27Z",
          "pushed_at": "2020-02-07T23:13:10Z",
          "git_url": "git://github.com/react-navigation/navigation-ex.git",
          "ssh_url": "git@github.com:react-navigation/navigation-ex.git",
          "clone_url": "https://github.com/react-navigation/navigation-ex.git",
          "svn_url": "https://github.com/react-navigation/navigation-ex",
          "homepage": "https://reactnavigation.org",
          "size": 6487,
          "stargazers_count": 511,
          "watchers_count": 511,
          "language": "TypeScript",
          "has_issues": true,
          "has_projects": true,
          "has_downloads": true,
          "has_wiki": true,
          "has_pages": false,
          "forks_count": 47,
          "mirror_url": null,
          "archived": true,
          "disabled": false,
          "open_issues_count": 0,
          "license": null,
          "forks": 47,
          "open_issues": 0,
          "watchers": 511,
          "default_branch": "master",
          "score": 1.0
        }
      ]
    }');

    return $result;
  }

}