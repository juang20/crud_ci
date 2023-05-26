<!DOCTYPE Html>
<Html>
<Head>
    <Title>Halaman Edit Mahasiswa</Title>
</Head>
<Body>
    <H3>Halaman Edit Mahasiswa</H3>
    <Form action="<?php echo site_url('home/fungsiEdit') ?>" method="post">
    <Table>
        <Tr>
            <Td>NIM</Td>
            <Td>:</Td>
            <Td><Input Type="Text" Name="nim" value="<?php Echo $queryMhsDetail->nim ?>" readonly></Td>
        </Tr>
        <Tr>
            <Td>Nama</Td>
            <Td>:</Td>
            <Td><Input Type="Text" Name="nama" Value="<?php echo $queryMhsDetail->nama ?>"></Td>
        </Tr>
        <Tr>
            <Td>Jurusan</Td>
            <Td>:</Td>
            <Td><Input Type="Text" Name="jurusan" Value="<?php echo $queryMhsDetail->jurusan ?>"></Td>
        </Tr>
        <Tr>
            <Td Colspan="3"><Button Type="Submit">Update Mahasiswa</Button></Td>
        </Tr>
    </Table>
    </Form>
</Body>
</Html>