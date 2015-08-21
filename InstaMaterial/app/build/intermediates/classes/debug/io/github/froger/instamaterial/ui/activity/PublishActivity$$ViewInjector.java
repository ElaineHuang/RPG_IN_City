// Generated code from Butter Knife. Do not modify!
package io.github.froger.instamaterial.ui.activity;

import android.view.View;
import butterknife.ButterKnife.Finder;

public class PublishActivity$$ViewInjector<T extends io.github.froger.instamaterial.ui.activity.PublishActivity> extends io.github.froger.instamaterial.ui.activity.BaseActivity$$ViewInjector<T> {
  @Override public void inject(final Finder finder, final T target, Object source) {
    super.inject(finder, target, source);

    View view;
    view = finder.findRequiredView(source, 2131558517, "field 'tbFollowers' and method 'onFollowersCheckedChange'");
    target.tbFollowers = finder.castView(view, 2131558517, "field 'tbFollowers'");
    ((android.widget.CompoundButton) view).setOnCheckedChangeListener(
      new android.widget.CompoundButton.OnCheckedChangeListener() {
        @Override public void onCheckedChanged(
          android.widget.CompoundButton p0,
          boolean p1
        ) {
          target.onFollowersCheckedChange(p1);
        }
      });
    view = finder.findRequiredView(source, 2131558518, "field 'tbDirect' and method 'onDirectCheckedChange'");
    target.tbDirect = finder.castView(view, 2131558518, "field 'tbDirect'");
    ((android.widget.CompoundButton) view).setOnCheckedChangeListener(
      new android.widget.CompoundButton.OnCheckedChangeListener() {
        @Override public void onCheckedChanged(
          android.widget.CompoundButton p0,
          boolean p1
        ) {
          target.onDirectCheckedChange(p1);
        }
      });
    view = finder.findRequiredView(source, 2131558520, "field 'ivPhoto'");
    target.ivPhoto = finder.castView(view, 2131558520, "field 'ivPhoto'");
  }

  @Override public void reset(T target) {
    super.reset(target);

    target.tbFollowers = null;
    target.tbDirect = null;
    target.ivPhoto = null;
  }
}
