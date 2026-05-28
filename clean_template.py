import re

file_path = 'resources/views/kirana.blade.php'

with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

# Fix the escaped quotes created by the previous attempt
content = content.replace("\\'", "'")

# Ensure all /assets/, /_next/, /news/, /profile/, /discography/ use {{ url('...') }}
# without leading slash inside the url() if possible, or consistent anyway.
# The previous script did a decent job but let's make sure they are clean.

# Example: {{ url('assets/...') }}
# If it's already wrapped in {{ url(...) }}, we just make sure it's not escaped.

# Let's also catch any remaining absolute paths that might have been missed
# like src="/images/..." if they exist (though I only saw assets and _next)
content = re.sub(r'(src|href)="/(images|assets|_next|news|profile|discography)(/?[^\"]*)\"', r'\1="{{ url(\'\2\3\') }}"', content)

# Remove any double wrapping if the regex caught something already wrapped (unlikely but safe)
# Actually, the regex above won't match {{ url('/...') }} because of the quotes.

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(content)
