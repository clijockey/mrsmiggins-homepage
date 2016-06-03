opendir(DIR, '.');

foreach (readdir(DIR)) {
	if (/\.html$/) {
		open(FILE, $_);
		open(FIX, '>fixed/'.$_);
		foreach $line (<FILE>) {
			$line =~ s/corp\.ukidcv\.local/public.ukidcv.local/gi;
			print FIX $line;

		}

		close(FILE);
		close(FIX);

	}

}

closedir(DIR);
