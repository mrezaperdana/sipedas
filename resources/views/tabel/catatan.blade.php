<p>Kolom Catatan:</p>
<div class="input-group flex-nowrap">
    <td class="tg-cly1"><input type="text" class="form-control-lg form-control @error('catatan') is-invalid @enderror"
            id="catatan" name="catatan" value="{{ old('catatan', $data->catatan) }}">
        @error('catatan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </td>
</div>
<script>
    window.addEventListener('load', () => {
        const inputs = document.querySelectorAll('.form-control:not(#catatan):not(.form-control2)');

        inputs.forEach((input) => {
            input.addEventListener('input', (event) => {
                const value = event.target.value;

                // Check if the value is a valid number or the string "..."
                const isValid = /^-?\d*\.?\d*$/.test(value);

                if (!isValid) {
                    event.target.setCustomValidity(
                        'Hanya boleh diisi angka, jika desimal gunakan titik (misal 13.2) atau isikan tanda minus (-) jika data tidak tersedia'
                    );
                } else {
                    event.target.setCustomValidity('');
                }

            });
        });

    });
</script>

-- Cek Dok K Belum Dientri atau Dok K Non Respon

SELECT
a.ID,
'[' + a.Kode_Kec + '] ' + kecamatan.Nama_Kecamatan AS 'Kecamatan',
'[' + a.Kode_Des + '] ' + desa.Nama_Desa AS 'Desa',
'[' + a.Kode_SLS + ']' + ' - ' + '[' + a.Kode_Sub_SLS + '] '+ a.Nama_SLS AS 'SLS - Sub SLS',
CASE WHEN a.r110 + 1 = MIN(b.r110) - 1 THEN CAST(a.r110 + 1 AS CHAR)
ELSE REPLACE(CAST(a.r110 + 1 AS CHAR), ' ','') + ' - ' + CAST(MIN(b.r110) - 1 AS CHAR) END AS 'No KK',
a.Nama_Pengentri AS 'Nama Pengentri',
'Belum Dientri atau Non Respon' AS 'Jenis Validasi'
FROM
(
SELECT
DISTINCT(
kode_prov + kode_kab + kode_kec + kode_desa + kode_sls + kode_subsls
) AS 'ID',
kode_prov + kode_kec AS 'Kode_Kecamatan',
kode_prov + kode_kec + kode_desa AS 'Kode_Desa',
kode_kec AS 'Kode_Kec',
kode_desa AS 'Kode_Des',
kode_sls AS 'Kode_SLS',
kode_subsls AS 'Kode_Sub_SLS',
sls_nama AS 'Nama_SLS',
operator AS 'Nama_Pengentri',
r110
FROM
tab_view_k
) AS a
JOIN (
SELECT
DISTINCT(
kode_prov + kode_kab + kode_kec + kode_desa + kode_sls + kode_subsls
) AS 'ID',
sls_nama AS 'Nama_SLS',
r110, r205
FROM
tab_view_k
where r205 != 3
) AS b ON a.ID = b.ID
AND a.r110 < b.r110 JOIN ( SELECT kode_prov + kode_kec + kode_desa AS 'Kode_Desa' , nama_desa AS 'Nama_Desa' FROM m_desa
    ) AS desa ON a.Kode_Desa=desa.Kode_Desa JOIN ( SELECT kode_prov + kode_kec AS 'Kode_Kecamatan' , nama_kec
    AS 'Nama_Kecamatan' FROM m_kec ) AS kecamatan ON a.Kode_Kecamatan=kecamatan.Kode_Kecamatan GROUP BY a.ID, '[' +
    a.Kode_Kec + '] ' + kecamatan.Nama_Kecamatan, '[' + a.Kode_Des + '] ' + desa.Nama_Desa, '[' + a.Kode_SLS + ']'
    + ' - ' + '[' + a.Kode_Sub_SLS + '] ' + a.Nama_SLS, a.Nama_Pengentri, a.r110 HAVING a.r110 + 1 < MIN(b.r110) ORDER
    BY 'Nama Pengentri' , Kecamatan, Desa, 'SLS - Sub SLS' , 'No KK' ;
