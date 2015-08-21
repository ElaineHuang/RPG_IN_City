// Generated code from Butter Knife. Do not modify!
package io.github.froger.instamaterial.ui.activity;

import android.view.View;
import butterknife.ButterKnife.Finder;

public class TakePhotoActivity$$ViewInjector<T extends io.github.froger.instamaterial.ui.activity.TakePhotoActivity> extends io.github.froger.instamaterial.ui.activity.BaseActivity$$ViewInjector<T> {
  @Override public void inject(final Finder finder, final T target, Object source) {
    super.inject(finder, target, source);

    View view;
    view = finder.findRequiredView(source, 2131558522, "field 'vRevealBackground'");
    target.vRevealBackground = finder.castView(view, 2131558522, "field 'vRevealBackground'");
    view = finder.findRequiredView(source, 2131558526, "field 'vTakePhotoRoot'");
    target.vTakePhotoRoot = view;
    view = finder.findRequiredView(source, 2131558529, "field 'vShutter'");
    target.vShutter = view;
    view = finder.findRequiredView(source, 2131558528, "field 'ivTakenPhoto'");
    target.ivTakenPhoto = finder.castView(view, 2131558528, "field 'ivTakenPhoto'");
    view = finder.findRequiredView(source, 2131558523, "field 'vUpperPanel'");
    target.vUpperPanel = finder.castView(view, 2131558523, "field 'vUpperPanel'");
    view = finder.findRequiredView(source, 2131558530, "field 'vLowerPanel'");
    target.vLowerPanel = finder.castView(view, 2131558530, "field 'vLowerPanel'");
    view = finder.findRequiredView(source, 2131558527, "field 'cameraView'");
    target.cameraView = finder.castView(view, 2131558527, "field 'cameraView'");
    view = finder.findRequiredView(source, 2131558532, "field 'rvFilters'");
    target.rvFilters = finder.castView(view, 2131558532, "field 'rvFilters'");
    view = finder.findRequiredView(source, 2131558531, "field 'btnTakePhoto' and method 'onTakePhotoClick'");
    target.btnTakePhoto = finder.castView(view, 2131558531, "field 'btnTakePhoto'");
    view.setOnClickListener(
      new butterknife.internal.DebouncingOnClickListener() {
        @Override public void doClick(
          android.view.View p0
        ) {
          target.onTakePhotoClick();
        }
      });
    view = finder.findRequiredView(source, 2131558525, "method 'onAcceptClick'");
    view.setOnClickListener(
      new butterknife.internal.DebouncingOnClickListener() {
        @Override public void doClick(
          android.view.View p0
        ) {
          target.onAcceptClick();
        }
      });
  }

  @Override public void reset(T target) {
    super.reset(target);

    target.vRevealBackground = null;
    target.vTakePhotoRoot = null;
    target.vShutter = null;
    target.ivTakenPhoto = null;
    target.vUpperPanel = null;
    target.vLowerPanel = null;
    target.cameraView = null;
    target.rvFilters = null;
    target.btnTakePhoto = null;
  }
}
