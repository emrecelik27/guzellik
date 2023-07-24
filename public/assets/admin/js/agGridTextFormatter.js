 function textFormatter(r) {
            if (r == null) return null;
            return r
                .replace('I', 'ı')
                .replace('İ', 'i')
                .toLowerCase()
                .replace(/[àáâãäå]/g, 'a')
                .replace(/æ/g, 'ae')
                .replace(/[èéêë]/g, 'e')
                .replace(/[ìíîï]/g, 'i')
                .replace(/ñ/g, 'n')
                .replace(/[òóôõ]/g, 'o')
                .replace(/œ/g, 'oe')
                .replace(/[ùúû]/g, 'u')
                .replace(/[ýÿ]/g, 'y');
        }