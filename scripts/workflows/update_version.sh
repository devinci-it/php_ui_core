#!/bin/bash


echo "Executing update_version.sh script"
latest_commit_message=$(git log -1 --pretty=%B)
echo "Latest commit message: $latest_commit_message"

latest_commit_message=$(git log -1 --pretty=%B)

case "$latest_commit_message" in
  *feat:*) composer require --lock --no-update devinci/uicore:^1.1 ;;
  *fix:*) composer require --lock --no-update devinci/uicore:~1.0.1 ;;
  *docs:*) composer require --lock --no-update devinci/uicore:~1.0.1 ;;
  *style:*) composer require --lock --no-update devinci/uicore:~1.0.1 ;;
  *refactor:*) composer require --lock --no-update devinci/uicore:~1.0.1 ;;
  *perf:*) composer require --lock --no-update devinci/uicore:~1.0.1 ;;
  *test:*) composer require --lock --no-update devinci/uicore:~1.0.1 ;;
  *chore:*) composer require --lock --no-update devinci/uicore:~1.0.1 ;;
  *) echo "Invalid choice"; exit 1 ;;
esac
