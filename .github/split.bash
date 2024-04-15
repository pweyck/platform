#!/usr/bin/env bash

source "$(dirname ${BASH_SOURCE[0]})/../.gitlab/bin/split.sh"

if [[ "${BASH_SOURCE[0]}" == "${0}" ]]; then
    set -o errexit
    set -o pipefail

    if [ -n "${DEBUG:-}" ]; then
        set -x
    fi

    PLATFORM_DIR="${CI_PROJECT_DIR:-$(pwd)}"

    "$@"
fi