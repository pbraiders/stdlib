const Configuration = {
    extends: ['@commitlint/config-conventional'],
    rules: {
        'type-enum': [2, 'always', ['chore', 'ci', 'feat', 'fix', 'docs', 'refactor', 'perf', 'test', 'revert', 'style']],
    }
};

module.exports = Configuration;