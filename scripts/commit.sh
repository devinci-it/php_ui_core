#!/bin/bash

# Prompt user for commit type
echo "Select the type of change:"
echo "1. Feature"
echo "2. Bug Fix"
echo "3. Documentation"
echo "4. Style"
echo "5. Refactor"
echo "6. Performance"
echo "7. Test"
echo "8. Chore"
read -p "Enter your choice (1-8): " choice

# Map choice to commit type
case $choice in
  1) type="feat";;
  2) type="fix";;
  3) type="docs";;
  4) type="style";;
  5) type="refactor";;
  6) type="perf";;
  7) type="test";;
  8) type="chore";;
  *) echo "Invalid choice"; exit 1;;
esac

# Prompt user for scope and subject
read -p "Enter the scope (e.g., component name): " scope
read -p "Enter a concise subject: " subject

# Generate commit message
commit_message="$type($scope): $subject"

# Commit changes
git add .
git commit -m "$commit_message"
