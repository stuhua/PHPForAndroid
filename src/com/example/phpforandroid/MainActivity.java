package com.example.phpforandroid;

import com.zhy.utils.HttpUtils;
import com.zhy.utils.HttpUtils.CallBack;

import android.app.Activity;
import android.gesture.GestureOverlayView;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

public class MainActivity extends Activity {
	private TextView tv;

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);
		tv = getViewById(R.id.tv);
		HttpUtils.doGetAsyn("http://10.0.3.2/android_connect/test.php", new CallBack() {

			@Override
			public void onRequestComplete(String result) {
				// TODO Auto-generated method stub
				tv.setText(result);
			}
		});

	}

	public <T extends View> T getViewById(int id) {
		return (T) findViewById(id);
	}
}
