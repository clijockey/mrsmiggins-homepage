opendir(DIR, '.');

foreach (readdir(DIR)) {
	if (/\.html$/) {
		open(FILE, $_);
		open(FIX, '>fixed/'.$_);
		foreach $line (<FILE>) {
			#$line =~ s/www\.ukidcv\.local/public.ukidcv.local/gi;
			$line =~ s/Blue chip dynamics/Mrs Miggins Pie Shop/gi;
			print FIX $line;

		}

		close(FILE);
		close(FIX);

	}

}

closedir(DIR);
