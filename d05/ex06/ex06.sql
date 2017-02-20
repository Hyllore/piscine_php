select titre, resum from film where lower(resum) LIKE '%vincent%' ORDER BY id_film;
